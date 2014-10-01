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
        View::share('type', $menu);
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
        View::share('mode', "new");

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
            $type = $input['action_type'];

            unset($input['action_type']);
            $this->footballTicket->setSlugPrefix($type);
            $this->footballTicket->create($input);
            Notification::success('Football Ticket was successfully added');
            return Redirect::to(URL::to('admin/footballticket?action_type='.$type));
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
    public function show($type, $slug) {
        //$template = 'frontend.%s.group-two-column-left';
        $node = $this->footballTicket->findByUri($type,$slug);
        View::share('body_class', "page {$type} {$slug}");
        View::share('type', $type);
        return View::make('footballticket::frontend.group-two-column-left', compact('node'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id) {
        $menu = $this->getActionType();
        $node = $this->footballTicket->find($id);
        View::share('type', $menu);
        View::share('menu', "$menu/edit");
        View::share('mode', "edit");
        $meta = FootballTicketMeta::where('football_ticket_id', '=', $id)->get();
        foreach($meta->toArray() as $val) {
            View::share('meta_'.$val['key'], $val['value']);
        }

        return View::make('footballticket::admin.footballticket.edit', compact('node'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id) {

        try {
            $menu = $this->getActionType();
            $input = Input::all();
            $type = $input['action_type'];
            unset($input['action_type']);
            $this->footballTicket->update($id, $input);
            Notification::success($type.' was successfully updated');
            $redirect = Redirect::to(URL::to('admin/footballticket?action_type='.$type));
            return $redirect;
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
        $menu = $this->getActionType();
        $this->footballTicket->destroy($id);
        $type=  Input::get('action_type');
        Notification::success($type.' was successfully deleted');
        return Redirect::to(URL::to('admin/footballticket?action_type='.$type));
    }

    public function confirmDestroy($id) {
        $menu = $this->getActionType();
        $node = $this->footballTicket->find($id);
        View::share('type', $menu);
        return View::make('footballticket::admin.footballticket.confirm-destroy', compact('node'))
            ->with('menu', 'footballticket/edit');
    }

    public function togglePublish($id) {

        return $this->footballTicket->togglePublish($id);
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
