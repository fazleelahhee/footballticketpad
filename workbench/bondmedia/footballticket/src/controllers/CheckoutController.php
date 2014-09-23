<?php

class CheckoutController extends BaseController {
    public function index($id='') {
        $customer = Session::get('customer');
        $ticket = RelatedTicket::getTicketByTicketId($id);
        View::share('body_class', 'pages checkout checkout');
        View::share('customer', $customer);
        View::share('ticket', $ticket);
        $node = new stdClass();
        $node->title = "checkout";
        var_dump($ticket);
        return View::make(Template::name('frontend.%s.checkout'), compact('node'));
    }
}