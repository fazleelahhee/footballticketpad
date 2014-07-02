<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Response;
use Str;
use Notification;
use Log;
use Config;

class MediaController extends BaseController {

    public function showMedia() {
        return View::make('backend.media.media')
            ->with('menu', 'media');
    }

    public function uploadAction() {
        $uploadPath['dir']    = public_path().DIRECTORY_SEPARATOR.Config::get('bondcms.upload_directory');
        $uploadPath['year']   = date('Y');
        $uploadPath['month']  = date('m');
        $uploadPath['day']    = date('d');
        $path = '';

        foreach($uploadPath as $relPath) {
            if(empty($path)) {
                $path = $relPath;
            } else {
                $path = $path.DIRECTORY_SEPARATOR.$relPath;
            }
            if(!file_exists($path)) {
                mkdir($path);
            }
        }

        if (Input::hasFile('file') && Input::file('file')->isValid())
        {
            $name   = Input::file('file')->getClientOriginalName();
            $ext    = Input::file('file')->getClientOriginalExtension();

            Input::file('file')->move($path, $name);
        }
    }
}