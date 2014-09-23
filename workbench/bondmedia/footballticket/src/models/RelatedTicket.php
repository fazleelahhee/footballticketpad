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

    public static function getTicketByTicketId($id = '') {
        if (empty($id)) {
            return null;
        }
        $output = [];
        $t = 'events_related_tickets';
        $e = 'events';
        $result= DB::table($t)
            ->select("{$t}.ticket", "{$t}.event_id", "{$e}.title", "{$e}.datetime", "{$e}.event_location")
            ->leftJoin($e, "{$t}.event_id", "=", "{$e}.id")
            ->where("{$t}.product_id",'=',$id)->get();
        if(count($result) > 0) {
            $output = $result[0];
            $output->ticket = json_decode($output->ticket);
            $output->ticketType = TicketType::find($output->ticket->ticketInformation->ticket_type)->toArray();
            $output->formOfTicket = FormOfTicket::find($output->ticket->ticketInformation->form_of_ticket)->toArray();

        }
        return $output;
    }
}