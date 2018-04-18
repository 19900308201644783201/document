<?php
namespace App\Core\BackupDatabase\Commands;

use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Config;
// use AWS;
// use Guzzle\Http;

class BackupCommand extends BaseCommand
{ 

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup
                {filename? : Filename or path for the dump.}
                {--database : The database connection to backup}
                {--upload-s3 : Upload the dump to your S3 bucket}
                {--path-s3 : The folder in which to save the backup},
                {--data-retention-s3 : Number of days to retain backups},
                {--disable-slack : Number of days to retain backups},
                {--archive : Create zip archive},
                {--s3-only : Delete local archive after S3 upload},
                {--type : Delete local archive after S3 upload}';

    protected $description = 'Backup the default database to `app/storage/dumps`';


    protected $filePath;
    protected $fileName;
    protected $sqlType;

    /**
     * Execute the console command
     *
     * @return mixed
     */
    public function handle()
    {
        $this->fire();
        $this->info('Backup data success');
    }

    public function fire()
    {
        $databaseDriver = Config::get('database.default', false);
        $databaseArgument = $this->option('database');

        if (!empty($databaseArgument)) {
            $databaseDriver = $databaseArgument;
        }

        $database = $this->getDatabase($databaseDriver);
        $dbConnectionConfig = Config::get('database.connections.' . $databaseDriver);

        $this->checkDumpFolder();

        $customFilename = $this->argument('filename');

        if ($customFilename) {
            // Is it an absolute path?
            if (substr($customFilename, 0, 1) == '/') {
                $this->filePath = $customFilename;
                $this->fileName = basename($this->filePath);
            } // It's relative path?
            else {
                $this->fileName = $customFilename . '_' . date('Y-m-d') . '.' . $database->getFileExtension();
                $this->filePath = rtrim($this->getDumpsPath(), '/') . '/' . $this->fileName;
                $this->filePath = rtrim($this->getDumpsPath(), '/');
            }
        } else {
            $this->fileName = $dbConnectionConfig['database'] . '_' . time() . '.' . $database->getFileExtension();
            $this->filePath = rtrim($this->getDumpsPath(), '/') . '/' . $this->fileName;
        }

        $status = $database->dump($this->filePath);

        if ($status === true) {

            // create zip archive
            if ($this->option('archive')) {
                dd('has option');
                $zip = new \ZipArchive();
                $zipFileName = $dbConnectionConfig['database'] . '_' . time() . '.zip';
                $zipFilePath = dirname($this->filePath) . '/' . $zipFileName;

                if ($zip->open($zipFilePath, \ZipArchive::CREATE) === true) {
                    $zip->addFile($this->filePath);
                    $zip->close();

                    // delete .sql files
                    unlink($this->filePath);

                    // change filename and filepath to zip
                    $this->filePath = $zipFilePath;
                    $this->fileName = $zipFileName;
                }
            }

            // display success message
            if ($customFilename) {
                $this->line(sprintf($this->colors->getColoredString("\n" . 'Database backup was successful. Saved to %s' . "\n", 'green'), $this->filePath));
            } else {
                $this->line(sprintf($this->colors->getColoredString("\n" . 'Database backup was successful. %s was saved in the dumps folder.' . "\n", 'green'), $this->fileName));
            }

            // upload to s3
            if ($this->option('upload-s3')) {
                $this->uploadS3();
                $this->line($this->colors->getColoredString("\n" . 'Upload complete.' . "\n", 'green'));
                if ($this->option('data-retention-s3')) {
                    $this->dataRetentionS3();
                }

                // remove local archive if desired
                if ($this->option('s3-only')) {
                    unlink($this->filePath);
                }
            }

            if ( ! empty($dbConnectionConfig['slackWebhookPath'])) {
                $disableSlackOption = $this->option('disable-slack');
                if ( ! $disableSlackOption) $this->notifySlack($dbConnectionConfig);
            }

        } else {
            // todo
            $this->line(sprintf($this->colors->getColoredString("\n" . 'Database backup failed. %s' . "\n", 'red'), $status));
        }
    }


    protected function checkDumpFolder()
    {
        $dumpsPath = $this->getDumpsPath();

        if ( ! is_dir($dumpsPath)) {
            mkdir($dumpsPath);
        }
    }

    protected function uploadS3()
    {
        $bucket = $this->option('upload-s3');
        $s3 = AWS::get('s3');

        $s3->putObject(array(
            'Bucket'     => $bucket,
            'Key'        => $this->getS3DumpsPath() . '/' . $this->fileName,
            'SourceFile' => $this->filePath,
        ));
    }

    protected function getS3DumpsPath()
    {
        if ($this->option('path-s3')) {
            $path = $this->option('path-s3');
        } else {
            $path = Config::get('laravel-db-backup::s3.path', 'databases');
        }

        return $path;
    }

    private function dataRetentionS3()
    {
        if ( ! $this->option('data-retention-s3')) {
            return;
        }

        $dataRetention = (int) $this->option('data-retention-s3');

        if ($dataRetention <= 0) {
            $this->error("Data retention should be a number");
            return;
        }

        $bucket = $this->option('upload-s3');
        $s3 = AWS::get('s3');

        $list = $s3->listObjects(array(
            'Bucket' => $bucket,
            'Marker' => $this->getS3DumpsPath(),
        ));

        $timestampForRetention = strtotime('-' . $dataRetention . ' days');
        $this->info('Retaining data where date is greater than ' . date('Y-m-d', $timestampForRetention));

        $contents = $list['Contents'];

        $deleteCount = 0;
        foreach ($contents as $fileArray) {
            $filePathArray = explode('/', $fileArray['Key']);
            $filename = $filePathArray[count($filePathArray) - 1];

            $filenameExplode = explode('_', $filename);

            $fileTimestamp = explode('.', $filenameExplode[count($filenameExplode) - 1])[0];

            if ($timestampForRetention > $fileTimestamp) {
                $this->info("The following file is beyond data retention and was deleted: {$fileArray['Key']}");
                // delete
                $s3->deleteObject(array(
                    'Bucket' => $bucket,
                    'Key'    => $fileArray['Key']
                ));
                $deleteCount++;
            }
        }

        if ($deleteCount > 0) {
            $this->info($deleteCount . ' file(s) were deleted.');
        }

        $this->info("");
    }

    private function notifySlack($databaseConfig)
    {
        $this->info('Sending slack notification..');
        $data['text'] = "A backup of the {$databaseConfig['database']} database at {$databaseConfig['host']} has been created.";
        $data['username'] = "Database Backup";
        $data['icon_url'] = "https://s3-ap-northeast-1.amazonaws.com/coreproc/images/icon_database.png";

        $content = json_encode($data);

        $command = "curl -X POST --data-urlencode 'payload={$content}' https://hooks.slack.com/services/{$databaseConfig['slackWebhookPath']}";

        shell_exec($command);
        $this->info('Slack notification sent!');
    }

}
