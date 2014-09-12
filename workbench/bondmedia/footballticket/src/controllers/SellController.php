<?php

class SellController extends BaseController
{
    public function __construct()
    {

    }

    public function ticketInformation($ticketId = '') {
        if (empty($ticketId)) {
            return '';
        }

        View::share('body_class', 'sell-1');
        $node = FootBallEvent::find($ticketId);
        return View::make(Template::name('frontend.%s.sell.1'), compact('node'));
    }

    public function ticketSellerInfo($ticketId = '') {
        $ticket = Input::all();
        $customer = Session::get('customer');
        View::share('body_class', 'sell-2');
        $node = FootBallEvent::find($ticketId);
//        var_dump($ticket);
//        var_dump($customer);
        return View::make(Template::name('frontend.%s.sell.2'), compact('node'));

    }
}
