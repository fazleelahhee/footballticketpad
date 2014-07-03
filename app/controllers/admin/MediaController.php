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
use Media;
use Bond\Traits\GridPagination;

class MediaController extends BaseController
{
    use GridPagination;

    protected $allowedExt = array('bmp', 'jpg', 'gif', 'png', 'jpeg',
        'xls', 'docx', 'doc', 'pdf', 'ppt', 'odt',
        'mp3', 'mp4', 'm4a', 'ogg', 'wav',
        'm4v', 'mov', 'wmv', 'avi', 'mpg', 'ogv', '3gp', '3g2');

    public function showMedia()
    {
        return View::make('backend.media.media')
            ->with('menu', 'media');
    }

    public function uploadAction()
    {

        $uploadPath['dir']   = public_path() . DIRECTORY_SEPARATOR . Config::get('bondcms.upload_directory');
        $uploadPath['year']  = date('Y');
        $uploadPath['month'] = date('m');
        $uploadPath['day']   = date('d');
        $path                = '';

        foreach ($uploadPath as $relPath) {
            if (empty($path)) {
                $path = $relPath;
            } else {
                $path = $path . DIRECTORY_SEPARATOR . $relPath;
            }
            if (!file_exists($path)) {
                mkdir($path);
            }
        }

        //create relative path
        $uploadPath['dir'] = Config::get('bondcms.upload_directory');
        $relativePath      = '';

        foreach ($uploadPath as $relPath) {
            if (empty($relativePath)) {
                $relativePath = $relPath;
            } else {
                $relativePath = $relativePath . DIRECTORY_SEPARATOR . $relPath;
            }
        }

        if (Input::hasFile('file') && Input::file('file')->isValid()) {
            $name = Input::file('file')->getClientOriginalName();
            $ext  = Input::file('file')->getClientOriginalExtension();
            $uid  = date("His");
            if (in_array($ext, $this->allowedExt)) {
                $fileName = Str::slug(rtrim(str_replace($this->allowedExt, '', $name), '.')) . "-$uid.$ext";
                Input::file('file')->move($path, $fileName);

                $attributes = array(
                    'file_name'  => $fileName,
                    'extension'  => $ext,
                    'path'       => $relativePath,
                    'type'       => 'full',
                    'height'     => 0,
                    'width'      => 0,
                    'created_at' => strtotime('now'),
                    'updated_at' => strtotime('now')
                );
                $media = new Media();
                $media->fill($attributes)->save();

                $response = Response::make(array('message'=>'file has been uploaded.', 'response'=>'success'));
                $response->header('Content-Type', 'application/json');
                return $response;

            } else {
                $response = Response::make(array('message'=>'Error uploading file! not allowed extension.', 'response'=>'fail'));
                $response->header('Content-Type', 'application/json');
                return $response;
            }

        } else {
            $response = Response::make(array('message'=>'Error uploading file! invalid file uploaded. please upload valid file.', 'response'=>'fail'));
            $response->header('Content-Type', 'application/json');
            return $response;
        }
    }

    public function showList() {

    }

    public function listJSON() {
        
    }
}