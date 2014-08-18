<?php

use Bond\Repositories\Tag\TagRepository as Tag;

class TagController extends BaseController {

    protected $tag;

    public function __construct(Tag $tag) {

        $this->tag = $tag;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($slug) {

        $articles = $this->tag->bySlug($slug);
        return View::make(Template::name('frontend.%s.tag.index'), compact('articles'));
    }
}
