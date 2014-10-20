<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class FootBallEvent extends BaseModel implements BaseModelInterface {

    public $table = 'events';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published', 'team_type',
        'home_team_id', 'away_team_id', 'season_id', 'tournament_id', 'event_in_home',
        'venue_image', 'feature_image', 'ticket_type_ids', 'form_of_ticket_ids', 'ticket_restriction_ids', 'event_location', 'feature_event',
        'meta_title','meta_description', 'meta_keyword'];

    protected $appends = ['url'];

    public function setUrlAttribute($value) {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {
        //return "events/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
        $season = FootballTickets::find($this->attributes['season_id']);
        $league = FootballTickets::find($this->attributes['tournament_id']);
        $output = "";
        if($season && $league ) {
            $output .= route('ticket.events.display', array('league'=>$league->slug, 'season'=>$season->slug, 'slug'=>$this->attributes['slug']));
        } else {
            return '';
        }
        return $output;
    }

    public static function getUrl($events) {
        if(isset($events->season_id) && $events->tournament_id) {
            $season = FootballTickets::find($events->season_id);
            $league = FootballTickets::find($events->tournament_id);

            $output = "";
            if($season && $league ) {
                $output .= route('ticket.events.display', array('league'=>$league->slug, 'season'=>$season->slug, 'slug'=>$events->slug));
            } else {
                return '';
            }
            return $output;
        }

    }

    public function getTicketTypes() {
        if( !empty($this->ticket_type_ids) ) {
            $ArrTypes = explode(',', $this->ticket_type_ids);
            $types = new TicketType();
            return $types->ticketByIds($ArrTypes);
        }
        return array();
    }

    public function getFormOfTickets() {
        if( !empty($this->form_of_ticket_ids) ) {
            $ArrTypes = explode(',', $this->form_of_ticket_ids);
            $types = new FormOfTicket();
            return $types->ticketByIds($ArrTypes);
        }
        return array();
    }

    public function getSelectedRestrictions() {
        if( !empty($this->ticket_restriction_ids) ) {
            $ArrTypes = explode(',', $this->ticket_restriction_ids);
            $types = new TicketRestriction();
            return $types->ticketByIds($ArrTypes);
        }
        return array();
    }

    public static function getClubRelatedTickets($clubId = '') {
        $results = DB::table('events')
            ->select('events.id', 'events.slug', 'events.title', 'events.datetime', DB::raw('MIN(events_related_tickets.price) AS price'))
            ->join('events_related_tickets','events_related_tickets.event_id','=','events.id')
            ->where('events.away_team_id', '=',$clubId)
            ->orWhere('events.home_team_id', '=', $clubId)
            ->groupBy('events.id')
            ->get();

        return $results;
    }

    public static function getLeagueRelatedTickets($tid = '') {
        $results = DB::table('events')
            ->select('events.*')
            //->join('events_related_tickets','events_related_tickets.event_id','=','events.id')
            ->where('events.tournament_id', '=',$tid)
            ->where('events.feature_event', '=', '1')
            ->groupBy('events.id')
            ->take(6)
            ->get();
        return $results;
    }
}
