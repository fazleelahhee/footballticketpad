<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class FootBallEvent extends BaseModel implements BaseModelInterface {

    public $table = 'events';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published', 'team_type',
        'home_team_id', 'away_team_id', 'season_id', 'tournament_id', 'event_in_home',
        'venue_id', 'feature_image', 'ticket_type_ids', 'form_of_ticket_ids', 'ticket_restriction_ids', 'event_location'];

//    protected $ticketTypes = array();
//    protected $formOfTickets = array();
//    protected $selectedRestrictions = array();

    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "events/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
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
}
