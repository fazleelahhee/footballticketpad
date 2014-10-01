<?php

class FootballTicketMeta extends BaseModel {

    public $table = 'football_ticket_meta';
    public $fillable = ['football_ticket_id', 'key', 'value'];

    public function __construct() {
        parent::__construct();
    }
}

