<?php

use Bond\Interfaces\BaseModelInterface as BaseModelInterface;

class FootballTickets extends BaseModel implements BaseModelInterface {

    public $table = 'football_ticket';
    public $fillable=['title', 'slug', 'content', 'is_published', 'type',
        'feature_image', 'venue_image', 'featured', 'order',
        'meta_title', 'meta_content', 'meta_description'
    ];
    protected $appends = ['url'];

    public function __construct() {
        parent::__construct();
    }

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {
        return "{$this->slug_prefix}/{$this->attributes['slug']}";
    }

    public static function getDataForOptions($type) {
        $results = DB::table('football_ticket')->select('id', 'title')->where('type', '=', $type)->get();
        $output = array(''=>'Select');
        foreach($results as $r) {
            $output[$r->id] = $r->title;
        }
        return $output;
    }


    public static function getClubs($tournament_id, $season_id) {
        $output = array();
        $results = DB::table('football_ticket_club_tournaments')
                   ->join('football_ticket', 'football_ticket.id', '=','football_ticket_club_tournaments.club_id')
                   ->select('football_ticket.*')
                   ->where('football_ticket_club_tournaments.tournament_id','=',$tournament_id)
                   ->where('football_ticket_club_tournaments.season_id', '=', $season_id)
                   ->groupBy('football_ticket.id')
                   ->orderBy('football_ticket.title', 'ASC')
                   ->get();
        foreach($results as $result) {

            $result->clubLogo = FootballTicketMeta::getTicketMeta($result->id, 'club_logo');

            $output[] = $result;
        }


        return $output;
    }
}

