<?php
namespace Bondmedia\Footballticket\Composers\Admin;
use DB;

class ClubComposer {
    public function compose($view) {
       $countries = DB::table('football_ticket')->where('type', '=', 'country')
           ->orderBy('created_at', 'ASC')
           ->groupBy('slug')
           ->get();

        $tournament = DB::table('football_ticket')->where('type', '=', 'league')
            ->orderBy('created_at', 'ASC')
            ->groupBy('slug')
            ->get();

        $season = DB::table('football_ticket')->where('type', '=', 'season')
            ->orderBy('created_at', 'ASC')
            ->groupBy('slug')
            ->get();

        $view->with('countries',  $countries);
        $view->with('tournament', $tournament);
        $view->with('season',     $season);
    }
}

