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
        $page = Pages::parseUri($url);
        if(!$page) {
            App::abort(404);
        }
        $template = 'frontend.%s.';
        $pagesMeta = new PagesMeta();
        $template = $template.Template::getTemplate($pagesMeta->getMetaKey([
                'page_id' => $page->id,
                'meta_keyword' => 'template'
            ])->meta_content);

        return View::make(Template::name($template), compact('page'));
    }

}
