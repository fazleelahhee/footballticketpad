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

        View::share('body_class', 'pages sell-1 sell1');
        $node = FootBallEvent::find($ticketId);
        return View::make(Template::name('frontend.%s.sell.1'), compact('node'));
    }

    public function ticketSellerInfo($ticketId = '') {
        $ticket = Input::all();
        $customer = Session::get('customer');
        View::share('body_class', 'pages sell-2 sell2');
        View::share('customer', $customer);
        $node = FootBallEvent::find($ticketId);
        return View::make(Template::name('frontend.%s.sell.2'), compact('node'));
    }

    public function ticketSellerAgreement($ticketId = '') {
        $ticket = Input::all();
        $customer = Session::get('customer');
        View::share('body_class', 'pages sell-3 sell3');
        View::share('customer', $customer);
        View::share('allCard', true);
        $node = FootBallEvent::find($ticketId);
        return View::make(Template::name('frontend.%s.sell.3'), compact('node'));
    }

}
