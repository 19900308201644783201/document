<?php

namespace App\Core\BackupDatabase;

use App\Core\BackupDatabase\Databases\MySQLDatabase;

class DatabaseBuilder
{
    protected $database;

    public function __construct()
    {
    }

    public function getDatabase(array $realConfig)
    {
        switch ($realConfig['driver'])
        {
            case 'mysql':
            $this->buildMySQL($realConfig);
            break;

            case 'sqlite':
            $this->buildSqlite($realConfig);
            break;

            case 'pgsql':
            $this->buildPostgres($realConfig);
            break;

            default:
            throw new \Exception('Database driver not supported yet');
            break;
        }

        return $this->database;
    }

    protected function buildMySQL(array $config)
    {
        $port = isset($config['port']) ? $config['port'] : 3306;
        $this->database = new MySQLDatabase(
            $config['database'],
            $config['username'],
            $config['password'],
            $config['host'],
            $port
        );
    }

    protected function buildSqlite(array $config)
    {
        $this->database = new SqliteDatabase(
            $config['database']
        );
    }

    protected function buildPostgres(array $config)
    {
        $this->database = new PostgresDatabase(
            $config['database'],
            $config['username'],
            $config['password'],
            $config['host']
        );
    }

}
