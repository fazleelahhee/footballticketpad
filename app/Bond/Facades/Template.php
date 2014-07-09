<?php namespace Bond\Facades;

use Illuminate\Support\Facades\Facade;
use Config;
class Template extends Facade {

    public static function name($format='') {
        return sprintf($format, Config::get('bondcms.theme'));
    }
}
