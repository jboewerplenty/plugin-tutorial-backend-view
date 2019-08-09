<?php

use Plenty\Modules\User\Contracts\UserRepositoryContract;

namespace MyFirstView\Providers;


use Plenty\Plugin\ServiceProvider;

    class MyFirstViewServiceProvider extends ServiceProvider
    {
        public function register()
        {
          /* @var UserRepositoryContract $UserRepo */
			$UserRepo = pluginApp(UserRepositoryContract::class);
            
            $test = $UserRepo->getCurrentUser();
        }
    }
