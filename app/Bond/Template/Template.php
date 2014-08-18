<?php namespace Bond\Template;

use Config;

class Template {
    public function name($format='') {
        return sprintf($format, Config::get('bondcms.template'));
    }
}