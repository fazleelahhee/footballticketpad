<?php

namespace Bondmedia\Admin\Facades;

use Illuminate\Support\Facades\Facade;
use HTML;
use Config;

class AssetCache  extends Facade
{
    private static $admin = false;
    private static $js_path = array();
    private static $css_path = array();


    public static function setStyles(array $css_path, $admin = false)
    {
        if($admin) {
            $path = Config::get('bondcms.admin_assets');
            foreach($css_path as $key=>$css) {
                $css_path[$key] = $path.$css;
            }
            static::$admin = true;
        }
        self::$css_path = array_merge(self::$css_path, $css_path);
    }

    public static function setScripts(array $file, $admin = false)
    {
        if($admin) {
            $path = Config::get('bondcms.admin_assets');
            foreach($file as $key=>$js) {
                $file[$key] = $path.$js;
            }
          static::$admin = true;

        }
        self::$js_path = array_merge(self::$js_path, $file);
    }


    public static function dumpScripts($debug = false)
    {
        $version =  '1.0';
        if($debug) {
            foreach(static::$js_path as $val)
            {
                echo HTML::script("{$val}?$version");
            }
        } else {
            $cachePath = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR."js";
            $cacheFileName = md5(implode('-', static::$js_path)).".js";
            $cacheFilePath = $cachePath.DIRECTORY_SEPARATOR.$cacheFileName;
            //is file exists
            if(!file_exists($cacheFilePath)) {
                $content = '';
                foreach(static::$js_path as $val)
                {
                    $content .= ";". file_get_contents(public_path().DIRECTORY_SEPARATOR.$val).PHP_EOL;
                }
                file_put_contents($cacheFilePath, $content);
                unset($content);
            }
            echo HTML::script(Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR."js".DIRECTORY_SEPARATOR.$cacheFileName);
        }
    }

    public static function dumpStyles($debug = false)
    {
        $version =  '1.0';

        if($debug) {
            foreach(static::$css_path as $val)
            {
                echo HTML::style("{$val}?$version");
            }
        } else {
            $cachePath = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR."css";
            $cacheFileName = md5(implode('-', static::$css_path)).".css";
            $cacheFilePath = $cachePath.DIRECTORY_SEPARATOR.$cacheFileName;
            //is file exists
            if(!file_exists($cacheFilePath)) {
                $content = '';
                foreach(static::$css_path as $val)
                {
                    $content .= file_get_contents(public_path().DIRECTORY_SEPARATOR.$val).PHP_EOL;
                }
                file_put_contents($cacheFilePath, $content);
                //need to adjust images and font
                unset($content);
                if(static::$admin) {
                    $target = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.admin_assets')."img";
                    $link = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR.'img';
                    symlink($target,$link);

                    $target = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.admin_assets')."fonts";
                    $link = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR.'fonts';
                    symlink($target, $link);
                }


            }
            echo HTML::style(Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR.$cacheFileName);
        }
    }

    public static function setDefaultCss()
    {
        self::$css_path = array();
    }

    public static function setDefaultJs()
    {
        self::$js_path = array();
    }

    public static function Image($url, $alt = null, $attributes = array(), $admin = false) {
        if(empty($url)) {
            return '';
        }

        if($admin) {
            $path = Config::get('bondcms.admin_assets');
            echo HTML::image($path.$url, $alt, $attributes);
        }
    }

    /**
     * @param $url
     * @param bool $admin
     */
    public static function Path($url, $admin = false) {
        if($admin) {
            $path = Config::get('bondcms.admin_assets');
            echo $path.$url;
        } else {
            echo $url;
        }
    }

    public static function process_html($text)
    {
        $re = '%# Collapse ws everywhere but in blacklisted elements.
        (?>             # Match all whitespans other than single space.
          [^\S ]\s*     # Either one [\t\r\n\f\v] and zero or more ws,
        | \s{2,}        # or two or more consecutive-any-whitespace.
        ) # Note: The remaining regex consumes no text at all...
        (?=             # Ensure we are not in a blacklist tag.
          (?:           # Begin (unnecessary) group.
            (?:         # Zero or more of...
              [^<]++    # Either one or more non-"<"
            | <         # or a < starting a non-blacklist tag.
              (?!/?(?:textarea|pre)\b)
            )*+         # (This could be "unroll-the-loop"ified.)
          )             # End (unnecessary) group.
          (?:           # Begin alternation group.
            <           # Either a blacklist start tag.
            (?>textarea|pre)\b
          | \z          # or end of file.
          )             # End alternation group.
        )  # If we made it here, we are not in a blacklist tag.
        %ix';
        $text = preg_replace($re, " ", $text);
        return $text;
    }
}