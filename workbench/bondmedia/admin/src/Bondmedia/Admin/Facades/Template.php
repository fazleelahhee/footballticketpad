<?php
namespace Bondmedia\Admin\Facades;

use Config;
use Illuminate\Support\Facades\Facade;

class Template extends Facade
{
    public static function getList() {
        $viewPath = Config::get('view.paths');
        $theme = Config::get('app.theme');
        $themeIniPath= $viewPath[0].DIRECTORY_SEPARATOR."frontend".DIRECTORY_SEPARATOR.$theme.DIRECTORY_SEPARATOR."template.ini";
        if(file_exists($themeIniPath)) {
            return parse_ini_file($themeIniPath);
        } else {
            return array('ini file not found!');
        }
    }

    public static function script()
    {

    }

    public static function style() {

    }
}