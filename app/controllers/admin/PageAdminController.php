<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Pages;
use Template;
use PagesMeta;
use Validator;
use Response;
use Request;
use Notification;
use Bond\Traits\GridPagination;
use Bond\Repositories\Page\PageRepository as Page;
use Bond\Exceptions\Validation\ValidationException;

class PageAdminController extends BaseController
{
    use GridPagination;

    public function showPages()
    {
        return View::make('backend.page.index')
            ->with('menu', 'pages');
    }

    public function listAction()
    {
        if (!Request::ajax()) {
            $response = Response::make(array(
                    'draw'            => 1,
                    'recordsTotal'    => 0,
                    'recordsFiltered' => 0,
                    'data'            => []
                )
            );

            $response->header('Content-Type', 'application/json');
            return $response;
        }

        $columns  = array(
            0 => 'id',
            1 => 'title',
            2 => 'slug',
            3 => 'is_published',
            4 => 'updated_at',
            5 => 'created_at'
        );
        $response = Response::make($this->getGridData('pages', $columns));
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function editAction($id)
    {
        $pageRepo = new Page();
        $pages    = new Pages();
        $page     = $pageRepo->find($id);
        View::share('pages', array_merge([0 => 'parent'], $pages->getPages()));
        $pagesMeta = new PagesMeta();
        View::share('feature_image', @$pagesMeta->getMetaKey(['page_id' => $id, 'meta_keyword' => 'feature_image'])->meta_content);
        View::share('template', @$pagesMeta->getMetaKey(['page_id' => $id, 'meta_keyword' => 'template'])->meta_content);
        View::share('templates', Template::getTemplates());

        return View::make('backend.page.edit')
            ->with('page', $page)
            ->with('menu', 'pages/edit');
    }

    public function newAction()
    {
        $pages = new Pages();
        View::share('pages', array_merge([0 => 'parent'], $pages->getPages()));
        View::share('templates', Template::getTemplates());
        return View::make('backend.page.create')
            ->with('menu', 'pages/new');
    }
}
