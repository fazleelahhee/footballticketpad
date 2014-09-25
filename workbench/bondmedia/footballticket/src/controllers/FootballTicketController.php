<?php

class FootballTicketController extends BaseController {

    protected $footballTicket;

//    public function __construct(FootbollTicket $footballTicket) {
//        $this->footballTicket = $footballTicket;
//    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
//        $footballTicket = $this->footballTicket->paginate(null, true);
        $menu = $this->getActionType();
        View::share('menu', $menu);
        //return View::make('backend.footballTicket.index', compact('footballTicket'));
        return View::make('footballticket::admin.footballticket.test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        return View::make('backend.news.create')
            ->with('menu', 'news/new');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        try {
            $this->news->create(Input::all());
            Notification::success('News was successfully added');
            return Redirect::route('admin.news.index');
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
