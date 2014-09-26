<?php

use Bond\Repositories\FootballTicket\FootballTicketRepository as FootballTicket;
use Bond\Exceptions\Validation\ValidationException;

class FootballTicketController extends BaseController {

    protected $footballTicket;

    public function __construct(FootballTicket $footballTicket) {
        $this->footballTicket = $footballTicket;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $node = $this->footballTicket->paginate(null, true);
        $menu = $this->getActionType();
        View::share('menu', $menu);
        return View::make('footballticket::admin.footballticket.index', compact('node'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $menu = $this->getActionType();
        View::share('type', $menu);
        View::share('menu', "$menu/new");
        return View::make('footballticket::admin.footballticket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        try {
            $input = Input::all();
            unset($input['action_type']);
            $this->footballTicket->create($input);
            Notification::success('Football Ticket was successfully added');
            return Redirect::route('admin.footballticket.index', array('action_type'=>Input::get('action_type')));
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
        return View::make('backend.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {

        $news = $this->news->find($id);
        return View::make('backend.news.edit', compact('news'))
            ->with('menu', 'news/edit');
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
            Notification::success('News was successfully updated');
            return Redirect::route('admin.news.index');
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
        Notification::success('News was successfully deleted');
        return Redirect::action('App\Controllers\Admin\NewsController@index');
    }

    public function confirmDestroy($id) {

        $news = $this->news->find($id);
        return View::make('backend.news.confirm-destroy', compact('news'))
            ->with('menu', 'news/edit');
    }

    public function togglePublish($id) {

        return $this->news->togglePublish($id);
    }

    public function getActionType() {
        $type = Input::get('action_type');
        $output = '';
        switch($type) {
            case "club":
                $output = $type;
                break;
            case "league":
                $output = $type;
                break;
            case "country":
                $output = $type;
                break;
            case "season":
                $output = $type;
                break;
            default:
                App::abort(403, 'Unauthorized action.');
        }

        return $output;
    }
}
