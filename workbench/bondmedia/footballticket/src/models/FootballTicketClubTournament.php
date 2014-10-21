<?php

class FootballTicketClubTournament extends BaseModel {
    public $table = 'football_ticket_club_tournaments';
    public $fillable=['tournament_id', 'club_id', 'season_id'];
    public function __construct() {
        parent::__construct();
    }

    public function getClubByTournament($id = '') {
        if(empty($id)) {
            return null;
        }
        $sql = "SELECT ft.title, l.club_id FROM football_ticket_club_tournaments AS l
                LEFT JOIN football_ticket AS ft ON ft.id = l.club_id
                WHERE tournament_id = :tournamentId";

        $results = DB::select( DB::raw($sql), array(
            'tournamentId' => $id,
        ));

        return $results;
    }
 }

