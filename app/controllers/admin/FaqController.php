<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use DB;
use Bond\Repositories\Faq\FaqRepository as Faq;
use Bond\Exceptions\Validation\ValidationException;

class FaqController extends BaseController {

    protected $news;

    public function __construct(Faq $news) {

        View::share('active', 'modules');
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $news = $this->news->paginate(null, true);
        return View::make('backend.faq.index', compact('news'))
            ->with('menu', 'faq');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        View::share('categories', DB::table('fbf_faq_category')->get());
        return View::make('backend.faq.create')
            ->with('menu', 'faq/new');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        try {
            $this->news->create(Input::all());
            Notification::success('Faq was successfully added');

            return Redirect::route('admin.faq.index');
        } catch (ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {

        $news = $this->news->find($id);
        return View::make('backend.faq.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {

        $news = $this->news->find($id);
        View::share('categories', DB::table('fbf_faq_category')->get());
        $selected = DB::table('fbf_faq_category_fbf_laravel_simple_faqs')
            ->where('fbf_laravel_simple_faqs_id', '=', $id )->get();
        $selectedCat = array();
        foreach($selected as $s) {
            $selectedCat[] = $s->fbf_faq_category_id;
        }
        View::share('selectedCat', $selectedCat);
        return View::make('backend.faq.edit', compact('news'))
            ->with('menu', 'faq/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {

        try {
            $this->news->update($id, Input::all());
            Notification::success('Faq was successfully updated');
            return Redirect::route('admin.faq.index');
        } catch (ValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {

        $this->news->destroy($id);
        Notification::success('Faq was successfully deleted');
        return Redirect::action('App\Controllers\Admin\FaqController@index');
    }

    public function confirmDestroy($id) {

        $news = $this->news->find($id);
        return View::make('backend.faq.confirm-destroy', compact('news'))
            ->with('menu', 'faq/edit');
    }

    public function togglePublish($id) {

        return $this->news->togglePublish($id);
    }
}
