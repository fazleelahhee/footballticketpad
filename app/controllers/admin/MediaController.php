<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use Request;
use View;
use Input;
use DB;
use Response;
use Str;
use Notification;
use Log;
use Config;
use Media;
use Bond\Traits\GridPagination;
use Bond\Filemanager\Filemanager;

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

        if(Input::hasFile('file')) {
            $fileVar = "file";
        } else {
            $fileVar = "newfile";
        }

        if (Input::hasFile($fileVar) && Input::file($fileVar)->isValid()) {
            $name = Input::file($fileVar)->getClientOriginalName();
            $ext  = Input::file($fileVar)->getClientOriginalExtension();
            $uid  = date("His");
            if (in_array($ext, $this->allowedExt)) {
                $fileName = Str::slug(rtrim(str_replace($this->allowedExt, '', $name), '.')) . "-$uid.$ext";
                Input::file($fileVar)->move($path, $fileName);

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

                $response = Response::make(array('message'=>'file has been uploaded.',
                                                 'response'=>'success',
                                                 'error_message' => '',
                                                 'path'=> DIRECTORY_SEPARATOR.$relativePath.DIRECTORY_SEPARATOR,
                                                 'name' => $fileName,
                                                 'code' => 0
                ));
                $response->header('Content-Type', 'application/json');
                return $response;

            } else {
                $response = Response::make(array('message'=>'Error uploading file! not allowed extension.',
                                                 'response'=>'fail',
                                                 'error_message' => 'Error uploading file! not allowed extension.',
                                                 'path' => DIRECTORY_SEPARATOR.$relativePath.DIRECTORY_SEPARATOR,
                                                 'name' => '',
                                                 'code' => '-1'
                ));
                $response->header('Content-Type', 'application/json');
                return $response;
            }

        } else {
            $response = Response::make(array('message'=>'Error uploading file! invalid file uploaded. please upload valid file.',
                                             'response'=>'fail',
                                             'error_message' => 'Error uploading file! invalid file uploaded. please upload valid file.',
                                             'path' => DIRECTORY_SEPARATOR.$relativePath.DIRECTORY_SEPARATOR,
                                             'name' => '',
                                             'code' => '-1'
            ));
            $response->header('Content-Type', 'application/json');
            return $response;
        }
    }

    public function showListAction() {
        return View::make('backend.media.index')
            ->with('menu','media/list');
    }

    public function listJsonAction() {
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
            1   =>  'file_name',
            2   =>  'file_name',
            3   =>  'file_name',
            4   =>  'updated_at',
            5   =>  'created_at',
            6   =>  'path',
            7   =>  'extension',
        );

        $gridData= $this->getGridData('media', $columns);

        $data = $gridData['data'];
        $output = array();
        foreach($data as $row) {
            $temp = array();
            $temp[0] = $row[0];
            $temp[1] = "<img src='/{$row[6]}/{$row[1]}' style='width: 50px; height: 50px;'>";
            $temp[2] = $row[1];
            $temp[3] = "[image id={$row[0]}]";
            $temp[4] = $row[4];
            $temp[5] = $row[5];
            $temp[6] = $row[8];
            $output[] = $temp;
        }
        $gridData['data'] = $output;
        $response = Response::make($gridData);
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function filemanagerAction() {
        $fm = new Filemanager();
        $response = '';
        if (!isset($_GET)) {
            $fm->error($fm->lang('INVALID_ACTION'));
        } else {

            if (isset($_GET['mode']) && $_GET['mode'] != '') {

                switch ($_GET['mode']) {

                    default:

                        $fm->error($fm->lang('MODE_ERROR'));
                        break;

                    case 'getinfo':

                        if ($fm->getvar('path')) {
                            $response = $fm->getinfo();
                        }
                        break;

                    case 'getfolder':

                        if ($fm->getvar('path')) {
                            $response = $fm->getfolder();
                        }
                        break;

                    case 'rename':

//                        if ($fm->getvar('old') && $fm->getvar('new')) {
//                            $response = $fm->rename();
//                        }

                        $response = array(
                            'Error'    => "Rename Currently disabled",
                            'Code'     => "-1",
                            'Old Path' => "",
                            'Old Name' => "",
                            'New Path' => "",
                            'New Name' => ""
                        );

                        break;

                    case 'delete':

                        if ($fm->getvar('path')) {
                            $fileName = basename(Input::get('path'));
                            $attachement = DB::table('media')->where('file_name',$fileName)->first();
                            $response = $this->destroy($attachement->id, true);
                            //$response = $fm->delete();
                        }
                        break;

                    case 'addfolder':

                        if ($fm->getvar('path') && $fm->getvar('name')) {
                            $response = $fm->addfolder();
                        }
                        break;

                    case 'download':
                        if ($fm->getvar('path')) {
                            $fm->download();
                        }
                        break;

                    case 'preview':
                        if ($fm->getvar('path')) {
                            $fm->preview();
                        }
                        break;

                    case 'maxuploadfilesize':
                        $fm->getMaxUploadFileSize();
                        break;
                }

            } else if (isset($_POST['mode']) && $_POST['mode'] != '') {

                switch ($_POST['mode']) {

                    default:

                        $fm->error($fm->lang('MODE_ERROR'));
                        break;

                    case 'add':

                        if ($fm->postvar('currentpath')) {
                            //$fm->add();
                           $uploadResponse = $this->uploadAction();
                            if($uploadResponse instanceof \Illuminate\Http\Response) {
                                $original = $uploadResponse->original;

                                $response = array(
                                    'Path'  => $original['path'],
                                    'Name'  => $original['name'],
                                    'Error' => $original['error_message'],
                                    'Code'  => $original['code']
                                );

                                echo '<textarea>' . json_encode($response) . '</textarea>';
                                die();
                            }

                        }
                        break;

                }

            }
        }

        $response = Response::make($response);
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function editAction($id='') {
        if(empty($id)) {
            return null;
        }

        $media = new Media();
        $image = $media->find($id);

        View::share('menu', 'media/edit');
        View::share('image_src', url("{$image->path}/{$image->file_name}"));
        View::share('image_sortcode', "[image id={$image->id}]");

        return View::make('backend.media.edit');

    }

    public function deleteAction($id='') {
        View::share('menu', 'media/confirmations');
        View::share('id', $id);
        $media = new Media();
        $media_item = $media->find($id);
        View::share('image_name', $media_item->full_name);
        return View::make('backend.media.confirm-destroy');
    }

    public function destroy($id = '', $byFileManager=false) {
        if(empty($id)) {
            return null;
        }
        $media = new Media();
        $media_item = $media->find($id);
        $path = public_path()."/{$media_item->path}/{$media_item->file_name}";
        $filePath = DIRECTORY_SEPARATOR.$media_item->path;
        if(file_exists($path)) {
            unlink($path);
            $media_item->delete();
            if( $byFileManager == false) {
                Notification::success('Image was successfully deleted');
                return Redirect::action('App\Controllers\Admin\MediaController@showListAction');
            } else {
               return array(
                    'Error' => "",
                    'Code'  => 0,
                    'Path'  => $filePath
                );
            }

        } else {
            if( $byFileManager == false) {
                Notification::success('Unable to delete!');
                return Redirect::action('App\Controllers\Admin\MediaController@showListAction');
            } else {
                return array(
                    'Error' => 'Unable to delete!',
                    'Code'  => 0,
                    'Path'  => "/uploads/"
                );
            }
        }
    }
}