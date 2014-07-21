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

    /**
     * @param string $path
     * @return string
     */
    public static function siteUrl($path = '') {
        $site_url = Config::get('app.url');

        if(!empty($site_url)) {
            if(empty($path))
                return rtrim($site_url, '/');
            return rtrim($site_url, '/').DIRECTORY_SEPARATOR.ltrim($path, '/');
        }
        $site_url = rtrim($_SERVER['SERVER_NAME'],'/');
        if(empty($path))
            return rtrim($site_url, '/');
        return rtrim($site_url, '/').DIRECTORY_SEPARATOR.ltrim($path, '/');
    }
}