<?php

use Bond\Repositories\Page\PageRepository as Page;
use Template;

class PageController extends BaseController {

    protected $page;

    public function __construct(Page $page) {

        $this->page = $page;
    }

    /**
     * Display page
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $template = 'frontend.%s.';
        $node = $this->page->find($id);
        $template = $template.Template::getTemplate(PagesMeta::getMetaKey([
                'page_id' => $id,
                'meta_keyword' => 'template'
            ])->meta_content);
        return View::make(Template::name($template), compact('node'));
    }
}
