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
        $meta = FootballTicketMeta::where('football_ticket_id', '=', $node->id)->get();
        foreach($meta->toArray() as $val) {
            $var_view = 'meta_'.$val['key'];
            if($var_view  == 'meta_tournament' ) {
                $meta_var =  json_decode($val['value'], true);
                $meta_var['id'] = $val['id'];
                $var_value[] = $meta_var;
                View::share($var_view, $var_value);
            } else {
                View::share($var_view, $val['value']);
            }

        }

        if($type == 'club') {
            View::share('tickets', FootBallEvent::getClubRelatedTickets($node->id));
            return View::make(Template::name('frontend.%s.team'), compact('node'));
        } else if($type == 'league') {
            View::share('tickets', FootBallEvent::getLeagueRelatedTickets($node->id));
            return View::make(Template::name('frontend.%s.league'), compact('node'));
        }
        else {
            return View::make('footballticket::frontend.group-two-column-left', compact('node'));
        }

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
            $var_view = 'meta_'.$val['key'];
            if($var_view  == 'meta_tournament' ) {
                $meta_var =  json_decode($val['value'], true);
                $meta_var['id'] = $val['id'];
                $var_value[] = $meta_var;
                View::share($var_view, $var_value);
            } else {
                View::share($var_view, $val['value']);
            }

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


    public function saveMeta() {
        $input = Input::all();

        $key   = $input['key'];
        $value = json_encode($input['value']);
        $id    = $input['id'];

        $footballMeta = new FootballTicketMeta();

        if(isset($input['value']['tournament'])) {
            $ftct = new FootballTicketClubTournament();
            $ftct->fill(array(
                'tournament_id' => $input['value']['tournament'],
                'club_id' => $input['id']
            ))->save();
        }

        $footballMeta->fill(array(
            'football_ticket_id' => $id,
            'key'                => $key,
            'value'              => $value
        ))->save();



        if ($footballMeta->id && $footballMeta->id !=- '') {
            $response = Response::make( json_encode( ['id' => $footballMeta->id ]) , '200' );
            $response->header('Content-Type', 'application/json');
            return $response;
        } else {
            $response = Response::make( json_encode( ['message' => 'unable to create' ]) , '400' );
            $response->header('Content-Type', 'application/json');
            return $response;
        }
    }

    public function deleteMeta() {
        $input = Input::all();
        $meta = FootballTicketMeta::find($input['id']);
        if($meta != null ) {
            if($meta->value != '') {
                $val = json_decode($meta->value, true);

                if(isset($val['tournament'])) {
                    $ftct =  FootballTicketClubTournament::where('tournament_id', '=', $val['tournament'])
                        ->where('club_id', '=', $meta->football_ticket_id)->first();
                    if( $ftct!= null) {
                        $ftct->delete();
                    }
                }
            }

            $meta->delete();
            $response = Response::make( json_encode( ['id' => $input['id'] ]) , '200' );
            $response->header('Content-Type', 'application/json');
            return $response;
        } else {
            $response = Response::make( json_encode( ['message' => 'unable to create' ]) , '400' );
            $response->header('Content-Type', 'application/json');
            return $response;
        }
    }

    public function searchEvent() {
        $input = Input::all();
        $output = array();
        if ( $input['q'] ) {
            $output = DB::table('events')->where('events.title', 'LIKE', "%{$input['q']}%")
                      ->leftJoin('football_ticket', 'events.tournament_id', '=', 'football_ticket.id')
                      ->select('events.id','events.title AS name','football_ticket.title AS league', 'events.datetime', 'events.feature_image', 'events.content', 'events.slug')
                      ->orderBy('events.datetime', 'ASC')
                      ->take(25)
                      ->get();
        }
        $response = Response::make( json_encode( $output ) , '200' );
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function searchEventCategory() {
        $input = Input::all();
        $output = array();
        if ( $input['q'] ) {
            $results = DB::table('football_ticket')->where('football_ticket.title', 'LIKE', "%{$input['q']}%")
                      ->whereRaw("football_ticket.type='club'")
                      ->take(5)
                      ->get();
        }

        foreach($results as $result) {
            $temp = array();
            $temp['name'] = $result->title;
            $temp['url'] = '/group/club/'.$result->slug;
            $temp['league']['name'] = 'premier ship';

            $output[] = $temp;
        }
        $response = Response::make( json_encode( $output ) , '200' );
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function displayEvents($slug = '') {

        $node = DB::table('events')->where('events.slug', '=', "$slug")
            ->leftJoin('football_ticket AS h', 'h.id', '=', 'events.home_team_id')
            ->leftJoin('football_ticket AS a', 'a.id', '=', 'events.away_team_id')
            ->select('events.*','h.title AS homeTeam','a.title AS awayTeam')
            ->first();

        $tickets = array();
        $ticketTypes =  array();

        if(isset($node->id)) {
            $results = DB::table('events_related_tickets')->where('event_id', '=', $node->id)->get();
            foreach($results as $r) {
                $temp = json_decode($r->ticket, true);
                $temp['product_id'] = $r->product_id;
                $tickets[] = $temp;
            }
        }

        $ticketTypes = DB::table('events_ticket_type')->get();
        View::share('body_class', 'page buy');
        View::share('node', $node);
        View::share('tickets', $tickets);
        View::share('ticketTypes', $ticketTypes);
        return View::make(Template::name('frontend.%s.buy'));
    }
}


