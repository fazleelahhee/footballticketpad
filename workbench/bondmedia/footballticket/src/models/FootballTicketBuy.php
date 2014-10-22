<?php

class FootballTicketBuy extends BaseModel {
    public $table = 'events_ticket_buy';
    public $fillable=['order_id', 'buyer_id','event_id', 'product_id', 'qty', 'amount', 'delivery_status','payment_status'];
    public function __construct() {
        parent::__construct();
    }

    public static function getTicketsByUserId($userId) {
        $results = DB::table('events_ticket_buy')
            ->join('events_related_tickets', 'events_ticket_buy.product_id', '=', 'events_related_tickets.product_id')
            ->where('buyer_id', '=', $userId)
            ->select('events_related_tickets.*', 'events_ticket_buy.qty', 'events_ticket_buy.amount','events_ticket_buy.payment_status', 'order_id', 'events_ticket_buy.created_at AS orderDate')
            ->get();
        return $results;
    }
}
