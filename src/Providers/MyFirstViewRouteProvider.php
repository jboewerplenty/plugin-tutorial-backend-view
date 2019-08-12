<?php

namespace MyFirstView\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\Routing\ApiRouter;

/**
 * Class plentyStatsRouteServiceProvider
 * @package plentyStats\Providers
 */
class MyFirstViewRouteProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router, ApiRouter $api)
    {
        $router->get('test', 'MyFirstView\Controllers\ContentController@showExample');
    }

}
