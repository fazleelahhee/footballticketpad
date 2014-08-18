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
    private static $onPageJs = array();

    public static function setStyles(array $css_path, $admin = false, $first=false)
    {
        if($admin) {
            $path = Config::get('bondcms.admin_assets');
            foreach($css_path as $key=>$css) {
                $css_path[$key] = $path.$css;
            }
            static::$admin = true;
        } else {
            $ds = DIRECTORY_SEPARATOR;
            $theme = Config::get('bondcms.theme');
            $path = "assets{$ds}frontend{$ds}{$theme}{$ds}";

            foreach($css_path as $key=>$css) {
                $css_path[$key] = $path.$css;
            }
        }
        if($first) {
            self::$css_path = array_merge($css_path, self::$css_path);
        } else {
            self::$css_path = array_merge(self::$css_path, $css_path);
        }

    }

    public static function setScripts(array $file, $admin = false, $first=false)
    {
        if($admin) {
            $path = Config::get('bondcms.admin_assets');
            foreach($file as $key=>$js) {
                $file[$key] = $path.$js;
            }
          static::$admin = true;

        } else {
            $ds = DIRECTORY_SEPARATOR;
            $theme = Config::get('bondcms.theme');
            $path = "assets{$ds}frontend{$ds}{$theme}{$ds}";
            foreach($file as $key=>$js) {
                $file[$key] = $path.$js;
            }
        }
        if($first) {
            self::$js_path = array_merge($file, self::$js_path);
        } else {
            self::$js_path = array_merge(self::$js_path, $file);
        }

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
            if(static::$admin) {
                $cachePath = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR."js";
            } else {
                $cachePath = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path_frontend').DIRECTORY_SEPARATOR."js";
            }

            $cacheFileName = md5(implode('-', static::$js_path)).".js";
            $cacheFilePath = $cachePath.DIRECTORY_SEPARATOR.$cacheFileName;
            $yuiCompressor = public_path().DIRECTORY_SEPARATOR."yuicompressor-2.4.8.jar";

            //is file exists
            if(!file_exists($cacheFilePath)) {
                $content = '';
                foreach(static::$js_path as $val)
                {
                    if(preg_match('/.min./', $val)) {
                        $content .= ";". file_get_contents(public_path().DIRECTORY_SEPARATOR.$val).PHP_EOL;
                    } else {
                        //compress it
                        $fileToCompress = public_path().DIRECTORY_SEPARATOR.$val;
                        $destName = uniqid('js_');
                        $response = shell_exec("java -jar {$yuiCompressor} {$fileToCompress} -o /tmp/{$destName}");
                        if(file_exists("/tmp/{$destName}")) {
                            $content .= ";". file_get_contents("/tmp/{$destName}");
                        } else {
                            $content .= ";". file_get_contents($fileToCompress);
                        }

                    }
                }
                file_put_contents($cacheFilePath, $content);
                unset($content);
            }

            if(static::$admin) {
                echo HTML::script(Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR."js".DIRECTORY_SEPARATOR.$cacheFileName);
            } else {
                echo HTML::script(Config::get('bondcms.assets_cache_path_frontend').DIRECTORY_SEPARATOR."js".DIRECTORY_SEPARATOR.$cacheFileName);
            }
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
            if(static::$admin) {
                $cachePath = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR."css";
            } else {
                $cachePath = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path_frontend').DIRECTORY_SEPARATOR."css";
            }
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
                    @unlink($link);
                    @symlink($target,$link);

                    $target = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.admin_assets')."fonts";
                    $link = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR.'fonts';
                    @unlink($link);
                    @symlink($target, $link);
                } else {
                    $ds = DIRECTORY_SEPARATOR;
                    $theme = Config::get('bondcms.theme');
                    $themePath = public_path()."{$ds}assets{$ds}frontend{$ds}{$theme}{$ds}";
                    $target = $themePath."bootstrap";

                    $link = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path_frontend').DIRECTORY_SEPARATOR.'bootstrap';
                    @unlink($link);
                    @symlink($target,$link);
                    $target = $themePath."images";
                    $link = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path_frontend').DIRECTORY_SEPARATOR.'images';
                    @unlink($link);
                    @symlink($target,$link);

                    $target = $themePath."fonts";
                    $link = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.assets_cache_path_frontend').DIRECTORY_SEPARATOR.'fonts';
                    @unlink($link);
                    @symlink($target, $link);
                }


            }
            if(static::$admin) {
                echo HTML::style(Config::get('bondcms.assets_cache_path').DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR.$cacheFileName);
            } else {
                echo HTML::style(Config::get('bondcms.assets_cache_path_frontend').DIRECTORY_SEPARATOR."css".DIRECTORY_SEPARATOR.$cacheFileName);
            }
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
        } else {
            $ds = DIRECTORY_SEPARATOR;
            $theme = Config::get('bondcms.theme');
            $path = "{$ds}assets{$ds}frontend{$ds}{$theme}{$ds}";
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
            $ds = DIRECTORY_SEPARATOR;
            $theme = Config::get('bondcms.theme');
            $path = "{$ds}assets{$ds}frontend{$ds}{$theme}{$ds}";
            echo $path.$url;
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

    public static function jsStart() {
        ob_start();
    }


    public static function jsEnd() {
        $jsContent = ob_get_contents();
        ob_end_clean();
        if(!empty($jsContent)) {
            static::$onPageJs[] = $jsContent;
        }
    }

    public static function dumpOnPageScripts()
    {
        $output = '';
        if(!empty(static::$onPageJs)) {
            foreach(static::$onPageJs as $content) {
                $output .= $content.PHP_EOL;
            }
        }

        return $output;
    }
}