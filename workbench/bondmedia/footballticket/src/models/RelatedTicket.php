<?php

class RelatedTicket extends \Illuminate\Database\Eloquent\Model{
    public $table = 'events_related_tickets';
    protected $fillable = ['price','event_id', 'product_id', 'ticket' , 'available_qty', 'user_id'];

    public static function getTicketsByEvent($eventId = '') {
        if (empty($eventId)) {
            return null;
        }
        $output = array();
        return $output;
    }

    public static function getTicketByTicketId($id = '') {
        if(empty($id)) {
            App::abort(404);
        }

        $output = [];
        $t = 'events_related_tickets';
        $e = 'events';
        $result= DB::table($t)
            ->select("{$t}.ticket", "{$t}.event_id", "{$e}.title", "{$e}.datetime", "{$e}.event_location", "{$t}.available_qty")
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

    public static function getEventsByUser($id = '') {
        if(empty($id)) {
            App::abort(404);
        }
        $t = 'events_related_tickets';
        $e = 'events';
        $result= DB::table($t)
            ->select("{$t}.ticket", "{$t}.event_id", "{$e}.*", "{$t}.available_qty", "{$t}.ticket_status")
            ->leftJoin($e, "{$t}.event_id", "=", "{$e}.id")
            ->groupBy("{$t}.event_id")
            ->where("{$t}.user_id",'=',$id)->get();
        return $result;
    }

    public static function updateTicket($product_id, $qty) {
        $ticket = RelatedTicket::where('product_id', '=', $product_id)->first();
        $ticket->available_qty = $ticket->available_qty - $qty;
        $ticket->save();
    }
}