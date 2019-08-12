<?php

use Plenty\Modules\User\Contracts\UserRepositoryContract;

namespace MyFirstView\Providers;


use Plenty\Plugin\ServiceProvider;

    class MyFirstViewServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $this->getApplication()->register(MyFirstViewRouteProvider::class);
        }
    }
