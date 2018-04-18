<?php
namespace App\Core\Base\Providers;

use Illuminate\Support\ServiceProvider;
use App\Core\Vocabulary\Providers\VocabularyServiceProvider;
use App\Core\Toeic\Providers\ToeicServiceProvider;
use App\Core\BackupDatabase\Providers\BackupDatabaseServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(VocabularyServiceProvider::class);
        $this->app->register(ToeicServiceProvider::class);
        $this->app->register(BackupDatabaseServiceProvider::class);
    }
}
