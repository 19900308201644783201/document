<?php
namespace App\Core\BackupDatabase\Providers;

use Illuminate\Support\ServiceProvider;
use App\Core\BackupDatabase\DatabaseBuilder;
use App\Core\BackupDatabase\Commands\BackupCommand;
use App\Core\BackupDatabase\Commands\RestoreCommand;


class BackupDatabaseServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // $this->app->register('Aws\Laravel\AwsServiceProvider');
        // $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        // $loader->alias('AWS', 'Aws\Laravel\AwsFacade');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            BackupCommand::class,
            // RestoreCommand::class
        ]);
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'db_backup');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
