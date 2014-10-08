<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use FootballTickets;
use Bond\Repositories\Events\EventsRepository AS Events;
use Bond\Exceptions\Validation\ValidationException;

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
}
