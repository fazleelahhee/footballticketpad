<?php namespace Bond\Composers;

use Setting;
use Pages;

class PageComposer {

    public function compose($view) {
        $uriArr = explode('?', $_SERVER['REQUEST_URI']);
        $uri = ltrim(rtrim($uriArr[0], '/'), '/');

        if($uri == '') { //homepage
            $node = Pages::parseUri('home');
        } else {
            $node = Pages::parseUri($uri);
        }

        if ( $node ) {
            $view->with('meta_description', '');
            $view->with('meta_description', 'display shit whole');
            $view->with('meta_keywords', 'display shit keyword whole');
        }
    }
}