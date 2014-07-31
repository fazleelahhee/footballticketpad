<?php

use Bond\Repositories\News\NewsRepository as News;

class NewsController extends BaseController {

    protected $news;

    public function __construct(News $news) {

        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $news = $this->news->paginate();
        View::share('body_class', 'news');
        return View::make(Template::name('frontend.%s.news.index'), compact('news'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id, $slug = null) {

        $news = $this->news->find($id);
        View::share('body_class', 'news');
        return View::make(Template::name('frontend.%s.news.show'), compact('news'));
    }
}
