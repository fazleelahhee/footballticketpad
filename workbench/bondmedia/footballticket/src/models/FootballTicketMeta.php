<?php

class FootballTicketMeta extends BaseModel {

    public $table = 'football_ticket_meta';
    public $fillable = ['football_ticket_id', 'key', 'value'];

    public function __construct() {
        parent::__construct();
    }

    public static function getTicketMeta($id="", $key="") {
        $meta = DB::table('football_ticket_meta')->where('key', '=',$key)
                                         ->where('football_ticket_id','=', $id)->first();

        return $meta;
    }
}


//if(isset($val['tournament'])) {
//    DB::statement("DELETE FROM football_ticket_club_tournaments WHERE tournament_id='' AND ");
//}