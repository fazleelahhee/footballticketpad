<?php

class IndexController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showPage($url) {
        $node = Pages::parseUri($url);
        if(!$node) {
            App::abort(404);
        }
        $template = 'frontend.%s.';
        $pagesMeta = new PagesMeta();

        $template = $template.Template::getTemplate(@$pagesMeta->getMetaKey([
                'page_id' => $node->id,
                'meta_keyword' => 'template'
            ])->meta_content);

        View::share('body_class',Template::getBodyClass($node, Template::getTemplate(@$pagesMeta->getMetaKey([
            'page_id' => $node->id,
            'meta_keyword' => 'template'
        ])->meta_content)));

        View::share('feature_image',@$pagesMeta->getMetaKey([
            'page_id' => $node->id,
            'meta_keyword' => 'feature_image'
        ])->meta_content);

        return View::make(Template::name($template), compact('node'));
    }

}
