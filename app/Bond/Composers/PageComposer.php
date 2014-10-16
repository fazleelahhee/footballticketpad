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
            if(isset($node->meta_title)) {
                $view->with('meta_title', $node->meta_title);
            }
            $view->with('meta_description', $node->meta_description);
            $view->with('meta_keywords', $node->meta_content);
        }
    }
}