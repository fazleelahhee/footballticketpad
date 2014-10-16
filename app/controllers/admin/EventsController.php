<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use DB;
use Notification;
use FootballTickets;
use Bond\Repositories\Events\EventsRepository AS Events;
use Bond\Exceptions\Validation\ValidationException;
use FootBallEvent;

class EventsController extends BaseController {

    protected $events;

    public function __construct(Events $events) {

        View::share('active', 'modules');
        $this->events = $events;
    }

    public function index() {
        $events = $this->events->paginate(null, true);
        return View::make('backend.events.index', compact('events'))
            ->with('menu', 'events');
    }

    public function create() {

        View::share('season', FootballTickets::getDataForOptions('season'));
        View::share('tournaments', FootballTickets::getDataForOptions('league'));
        View::share('club', FootballTickets::getDataForOptions('club'));
        View::share('countries', FootballTickets::getDataForOptions('contry'));
        View::share('events', null);
        return View::make('backend.events.create')
            ->with('menu', 'events/events');;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        try {
            $this->events->create(Input::all());
            Notification::success('Events was successfully added');
            return Redirect::route('admin.events.index');
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

        $events = $this->events->find($id);
        return View::make('backend.events.show', compact('events'))
            ->with('menu', 'events/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        View::share('season', FootballTickets::getDataForOptions('season'));
        View::share('tournaments', FootballTickets::getDataForOptions('league'));
        View::share('club', FootballTickets::getDataForOptions('club'));
        View::share('countries', FootballTickets::getDataForOptions('country'));

        $events = $this->events->find($id);
        View::share('events', $events);
        return View::make('backend.events.edit')
            ->with('menu', 'events/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {

        try {
            $this->events->update($id, Input::all());
            Notification::success('Events was successfully updated');
            return Redirect::route('admin.events.index');
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

        $this->events->destroy($id);
        Notification::success('Events was successfully deleted');
        return Redirect::action('App\Controllers\Admin\EventsController@index');
    }

    public function confirmDestroy($id) {

        $events = $this->events->find($id);
        return View::make('backend.events.confirm-destroy', compact('events'))
            ->with('menu', 'events/edit');
    }

    public function togglePublish($id) {

        return $this->news->togglePublish($id);
    }

    public function widget() {
        $hotTickets = FootBallEvent::where('widget_display', '=', '1')
                      ->orderBy('widget_order', 'ASC')
                      ->whereRaw('datetime >= NOW()')
                      ->get();

        $hotTicketsId = array();

        foreach($hotTickets as $t) {
            $hotTicketsId[] = $t->id;
        }

        $games = array();

        if(!empty($hotTicketsId)) {
            $gameObj = FootBallEvent::whereRaw('datetime >= NOW()')
                ->orderBy('title', 'ASC')
                ->whereNotIn('id', $hotTicketsId);
        } else {
            $gameObj = FootBallEvent::whereRaw('datetime >= NOW()')
                ->orderBy('title', 'ASC');
        }

        $games = $gameObj->get();

        View::share('tickets', $hotTickets);
        View::share('games', $games);

        return View::make('backend.events.widget')
            ->with('menu', 'events/widget');
    }

    public function widgetUpdate() {
        $tickets = Input::get('tickets');
        $updateIds = array();
        if(is_array($tickets)) {
            foreach($tickets as $ticket) {
                $id = (int) $ticket['id'];
                $order = (int) $ticket['index'];
                $updateIds[] = $id;
                DB::table('events')
                ->where('id', $id)
                ->update(array('widget_display' => 1, 'widget_order'=>$order));
            }

            DB::table('events')->whereNotIn('id', $updateIds)->update(array('widget_display' => 0, 'widget_order'=>0));
        }
        echo json_encode(array('success'));
    }
}
