<?php
namespace Bondmedia\Admin\Facades;

use Sentry;
use Illuminate\Support\Facades\Facade;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BMUser extends Facade {

    public static function getUserName() {
        $user = Sentry::getUser();
        if(!empty($user)) {
            return $user->first_name . ' '. $user->last_name;
        }
    }

}