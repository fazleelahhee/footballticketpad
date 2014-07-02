<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Request;
use Notification;
use Bond\Traits\GridPagination;
use Bond\Repositories\Page\PageRepository as Page;
use Bond\Exceptions\Validation\ValidationException;

class PageAdminController extends BaseController {
    use GridPagination;

    public function showPages()
    {
        return View::make('backend.page.index')
            ->with('menu','pages');
    }

    public function listAction() {
        if (!Request::ajax()) {
            $response = Response::make(array(
                    'draw'              =>  1,
                    'recordsTotal'      =>  0,
                    'recordsFiltered'   =>  0,
                    'data'              =>  []
                )
            );

            $response->header('Content-Type', 'application/json');
            return $response;
        }

        $columns = array(
            0   =>  'id',
            1   =>  'title',
            2   =>  'uri_path',
            3   =>  'is_published',
            4   =>  'updated_at',
            5   =>  'created_at'
        );
        $response = Response::make($this->getGridData('pages', $columns));
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function editAction($id) {
        $pageRepo =  new Page();
        $page = $pageRepo->find($id);
        return View::make('backend.page.edit')
            ->with('page', $page)
            ->with('menu', 'pages/edit');
    }

    public function newAction() {
        return View::make('backend.page.create')
            ->with('menu', 'pages/new');
    }
}
