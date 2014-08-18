<?php

class HomeController extends BaseController {

    protected $slider;

    public function __construct(Slider $slider) {

        $this->slider = $slider;
    }

    public function index() {
        $slider = $this->slider->with('images')->get()->first();
        if (isset($slider)) $images = $slider->images;
        $template = 'frontend.%s.';
        $template = $template.Template::getTemplate('home');
        View::share('body_class', 'home');
        return View::make(Template::name($template), compact('images'));
    }
}
