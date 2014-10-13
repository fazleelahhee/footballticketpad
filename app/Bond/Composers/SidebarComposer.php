<?php namespace Bond\Composers;

use Setting;
use Config;
use Session;
use FootballTickets;
class SidebarComposer {
    public function compose($view) {
        $featureClub = FootballTickets::where('type', '=', 'club')
            ->leftJoin('football_ticket_meta', function ($join) {
                $join->on('football_ticket.id', '=', 'football_ticket_meta.football_ticket_id')
                    ->where('football_ticket_meta.key','=', 'club_logo');
            })->where('featured', '=', '1')
            ->orderBy('order', 'ASC')
            ->groupBy('football_ticket.id')
            ->take(5)
            ->get();
        $view->with('featureClub', $featureClub);


    }
}