<?php
namespace App\Core\Base\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class BaseRouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = null;

    /**
     * This routePath defines web routes
     *
     * @var string
     */

    protected $routePath = null;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();
    }
    
    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('api')
            ->namespace($this->namespace)
            ->group($this->routePath);
        // $router->group(['namespace' => $this->namespace, 'middleware' => ['api'],], function ($router) {
        //     require $this->routePath;
        // });
    }
}
