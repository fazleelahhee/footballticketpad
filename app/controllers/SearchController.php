<?php

class SearchController extends BaseController {

    public function index() {

        $q = Input::get('search');

        View::composer(Template::name('frontend.%s._layout.menu'), function ($view) use ($q) {

            $view->with('q', $q);
        });

        $result = Search::search($q);
        $paginator = Paginator::make($result, count($result), 10);
        View::share('body_class', 'search');
        return View::make(Template::name('frontend.%s.search.index'), compact('paginator', 'q'));
    }

    public function ticketSearch() {
        $q= Input::get('search');
        $ticketApi = Config::get('api.mage_soap_api_url');
        $node = null;
        if(!empty($q)) {
            //$query_param = "&filter[1][attribute]=name&filter[1][like]=%25{$q}%25";
            $query_param = $q;
        } else {
            $query_param = '';
        }

        View::share('body_class', 'search-results ticket-search');
        return View::make(Template::name('frontend.%s.search'), compact('q', 'ticketApi', 'node', 'query_param'));
    }

}
