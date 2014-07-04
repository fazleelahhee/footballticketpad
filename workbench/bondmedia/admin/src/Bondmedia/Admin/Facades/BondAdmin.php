<?php
namespace Bondmedia\Admin\Facades;

use Config;
use Illuminate\Support\Facades\Facade;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BondAdmin extends Facade {

    public static function url($uri= '') {
        $adminPrefix = Config::get("bondcms.admin_prefix");
        return "{$adminPrefix}/{$uri}";
    }

}