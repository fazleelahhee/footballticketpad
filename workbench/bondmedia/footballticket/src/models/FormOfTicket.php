<?php

class FormOfTicket extends \Illuminate\Database\Eloquent\Model{
    public $table = 'events_form_of_ticket';

    public function ticketByIds($ids = array()) {
        return DB::table($this->table)->whereIn('id', $ids)->get();
    }
}