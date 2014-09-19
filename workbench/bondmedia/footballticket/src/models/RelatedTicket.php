<?php

class RelatedTicket extends \Illuminate\Database\Eloquent\Model{
    public $table = 'events_related_tickets';

    public static function getTicketsByEvent($eventId = '') {
        if (empty($eventId)) {
            return null;
        }
        $output = array();

        return $output;
    }


}