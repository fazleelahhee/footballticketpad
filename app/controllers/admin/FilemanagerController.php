<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use Sentry;
use View;
use Input;
use Validator;
use User;
use Notification;

class FilemanagerController extends BaseController {

    public function index() {
        $data = array( 'admin_url' => "" );
        return View::make('backend.plugins.filemanager', $data);
    }

    public function showInAdmin() {
        return View::make('backend.plugins.in-admin')->with('menu', 'filemanager');
    }
}