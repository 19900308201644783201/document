<?php
namespace App\Core\Toeic\Providers;

use App\Core\Base\Providers\BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */

    protected $namespace = 'App\Core\Toeic\Http\Controllers';
    /**
     * This routePath defines web routes
     *
     * @var string
     */
    protected $routePath = __DIR__ . '/../Http/routes.php';
}
