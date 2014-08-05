<?php namespace Bond\Facades;

use Illuminate\Support\Facades\Facade;
use Config;
use Cache;
use Carbon\Carbon;

class Template extends Facade {
    private static $templates = array();
    private static $theme = '';
    private static $cacheKey = 'bm-theme-config';

    public static function name($format='') {
        if(empty(static::$theme)) {
            static::$theme = Config::get('bondcms.theme');
        }
        return sprintf($format, static::$theme);
    }

    public static function getTemplates() {
        if(empty(static::$templates)) {
            static::$templates = static::getTemplateConfig()['templates'];
        }
        return static::$templates;
    }

    public static function getTemplate($templateName = 'default') {
        $templates = static::getTemplates();
        if(empty($templateName)) {
            $templateName = 'default';
        }
        return str_replace(['.blade.php', '.php'],'',$templates[$templateName]);
    }

    public static function getBodyClass($node, $templateName) {
        $output[] =  $node->id;
        $output[] =  get_class($node);
        $output[] =  get_class($node)."-".$node->id;
        $output[] =  $node->slug;
        if(!empty($templateName)) {
            $output[] = $templateName;
        }
        return str_replace([',', '/'], '-', strtolower(implode(' ',$output)));
    }


    public static function getTemplatesWithPath() {
        $output = [];
        $templates = static::getTemplates();
        $theme = Config::get('bondcms.theme');
        foreach($templates as $template) {
            $output[] = "frontend.{$theme}.".str_replace(['.blade.php', '.php'],'',$template);
        }

        return $output;
    }
    private static function getTemplateConfig() {
        $paths = Config::get('view.paths');
        $themeConfig = Cache::get(static::$cacheKey);
        if($themeConfig) {
            return $themeConfig;
        }
        $expiresAt = Carbon::now()->addMinutes(60);
        $themeConfig = $paths[0].DIRECTORY_SEPARATOR.
            'frontend'.DIRECTORY_SEPARATOR.Config::get('bondcms.theme').DIRECTORY_SEPARATOR."config.json";

        if(file_exists($themeConfig)) {
            $themeConfig = file_get_contents($themeConfig);
            $themeConfig = json_decode($themeConfig, true);
            Cache::put(static::$cacheKey, $themeConfig, $expiresAt);
            return $themeConfig;
        }
        return ['templates' =>  [] ] ;
    }
}


