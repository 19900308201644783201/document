<?php

namespace App\Core\BackupDatabase\Databases;

use App\Core\BackupDatabase\Databases\DatabaseInterface;
use App\Core\BackupDatabase\Console;

class MySQLDatabase implements DatabaseInterface
{
    protected $database;
    protected $user;
    protected $password;
    protected $host;
    protected $port;

    protected $console;

    public function __construct($database, $user, $password, $host, $port)
    {
        $this->console = new Console();
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
        $this->host = $host;
        $this->port = $port;
    }

    public function dump($destinationFile)
    {
        $command = sprintf('mysqldump --user=%s --password=%s --host=%s --port=%s %s > %s',
            escapeshellarg($this->user),
            escapeshellarg($this->password),
            escapeshellarg($this->host),
            escapeshellarg($this->port),
            escapeshellarg($this->database),
            escapeshellarg($destinationFile)
        );
        // return exec($command);
        return $this->console->run($command);
    }

    public function restore($sourceFile)
    {
        $command = sprintf('mysql --user=%s --password=%s --host=%s --port=%s %s < %s',
            escapeshellarg($this->user),
            escapeshellarg($this->password),
            escapeshellarg($this->host),
            escapeshellarg($this->port),
            escapeshellarg($this->database),
            escapeshellarg($sourceFile)
        );
        // return exec($command);
        return $this->console->run($command);
    }

    public function getFileExtension()
    {
        return 'sql';
    }

}
