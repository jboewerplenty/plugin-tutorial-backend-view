<?php

namespace MyFirstView\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Application;

use Plenty\Modules\User\Contracts\UserRepositoryContract;
use Plenty\Modules\Authorization\Services\AuthHelper;

/**
 * Class ContentController
 * @package plentyStats\Controllers
 */
class ContentController extends Controller
{
    /**
     * @return string
     */
    public function showExample():string
    {
        /** @var Application $app */
        $app = pluginApp(Application::class);


        $AuthHelper = pluginApp(AuthHelper::class);

        /* @var UserRepositoryContract $UserRepo */
        $UserRepo = pluginApp(UserRepositoryContract::class);

        return pluginApp(Twig::class)->render('MyFirstView::DB.Example', [
            'relay' => [
                'AllUsers'		=> $AuthHelper->processUnguarded(
                    function () use ($UserRepo) {
                        return $UserRepo->getAll();
                    }
                ),
                'UserByID'		=> $AuthHelper->processUnguarded(
                    function () use ($UserRepo) {
                        return $UserRepo->getUserById(1);
                    }
                ),
                'CurrentUser'   => $UserRepo->getCurrentUser(),
            ]
        ]);

    }
}
