<?php

use Bond\Repositories\Article\ArticleRepository as Article;
use Bond\Repositories\Category\CategoryRepository as Category;
use Bond\Repositories\Tag\TagRepository as Tag;

class ArticleController extends BaseController {

    protected $article;

    public function __construct(Article $article, Tag $tag, Category $category) {

        $this->article = $article;
        $this->tag = $tag;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $articles = $this->article->paginate();
        return View::make(Template::name('frontend.%s.article.index'), compact('articles'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id, $slug = null) {

        $article = $this->article->find($id);

        View::composer(Template::name('frontend.%s._layout.layout'), function ($view) use ($article) {

            $view->with('meta_keywords', $article->meta_keywords);
            $view->with('meta_description', $article->meta_description);
        });

        View::share('body_class', 'articles');

        $categories = $this->category->all();
        $tags = $this->tag->all();
        return View::make(Template::name('frontend.%s.article.show'), compact('article', 'categories', 'tags'));
    }
}
