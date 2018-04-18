<?php
namespace App\Core\BackupDatabase\Commands;

use Illuminate\Console\Command;
use Config;
use App\Core\BackupDatabase\DatabaseBuilder;
use App\Core\BackupDatabase\ConsoleColors;

class BaseCommand extends Command
{
    protected $databaseBuilder;

    protected $colors;

    public function __construct()
    {
        parent::__construct();
        $this->databaseBuilder = new DatabaseBuilder();
        $this->colors          = new ConsoleColors();
    }

    public function getDatabase($databaseDriver)
    {
        //$database   = $database ?: Config::get('database.default');
        $realConfig = Config::get('database.connections.' . $databaseDriver);

        return $this->databaseBuilder->getDatabase($realConfig);
    }

    protected function getDumpsPath()
    {
        return Config::get('db_backup.path');
    }

}
