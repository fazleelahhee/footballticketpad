<?php

class FootballTicketMeta extends BaseModel {

    public $table = 'football_ticket_meta';
    public $fillable = ['football_ticket_id', 'key', 'value'];

    public function __construct() {
        parent::__construct();
    }
}

//if(isset($val['tournament'])) {
//    DB::statement("DELETE FROM football_ticket_club_tournaments WHERE tournament_id='' AND ");
//}