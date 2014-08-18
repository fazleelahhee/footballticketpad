<?php

class HomeController extends BaseController
{

    protected $slider;

    public function __construct(Slider $slider)
    {

        $this->slider = $slider;
    }

    public function index()
    {
        $slider = $this->slider->with('images')->get()->first();
        if (isset($slider)) {
            $images = $slider->images;
        }

        $node = Pages::parseUri('home');

        if ($node) {
            $template  = 'frontend.%s.';
            $pagesMeta = new PagesMeta();

            $template = $template . Template::getTemplate(@$pagesMeta->getMetaKey([
                    'page_id'      => $node->id,
                    'meta_keyword' => 'template'
                ])->meta_content);

            View::share('body_class', Template::getBodyClass($node, Template::getTemplate(@$pagesMeta->getMetaKey([
                'page_id'      => $node->id,
                'meta_keyword' => 'template'
            ])->meta_content)));
        } else {
            $template = 'frontend.%s.';
            $template = $template . Template::getTemplate('home');
            View::share('body_class', 'home');
        }

        return View::make(Template::name($template), compact('images', 'node'));
    }
}
