<?php

class TicketType extends \Illuminate\Database\Eloquent\Model{
    public $table = 'events_ticket_type';

    public function ticketByIds($ids = array()) {
        return DB::table($this->table)->whereIn('id', $ids)->get();
    }
}