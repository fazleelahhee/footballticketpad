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

        if(Request::isMethod('post'))
        {
            $data = Input::all();
            Session::put('ticket_part_1', $data);
            //redirect to second page
            return Redirect::route('ticket.sell.2', array('id'=>$ticketId));
        }

        View::share('body_class', 'pages sell-1 sell1');
        $node = FootBallEvent::find($ticketId);
        return View::make(Template::name('frontend.%s.sell.1'), compact('node'));
    }

    public function ticketSellerInfo($ticketId = '') {
        //$ticket = Input::all();

        if(Request::isMethod('post'))
        {
            $data = Input::all();
            Session::put('ticket_part_2', $data);
            //redirect to second page
            return Redirect::route('ticket.sell.3', array('id'=>$ticketId));
        }

        $customer = Session::get('customer');
        View::share('body_class', 'pages sell-2 sell2');
        View::share('customer', $customer);
        $node = FootBallEvent::find($ticketId);
        return View::make(Template::name('frontend.%s.sell.2'), compact('node'));
    }

    public function ticketSellerAgreement($ticketId = '') {

        if(Request::isMethod('post'))
        {
            $data = Input::all();
            Session::put('ticket_part_3', $data);
            //redirect to second page
            return Redirect::route('ticket.sell.4', array('id'=>$ticketId));
        }

        $customer = Session::get('customer');
        View::share('body_class', 'pages sell-3 sell3');
        View::share('customer', $customer);
        View::share('allCard', true);
        $node = FootBallEvent::find($ticketId);
        return View::make(Template::name('frontend.%s.sell.3'), compact('node'));
    }

    public function publishTicket() {

        $ticketInformation  = Session::get('ticket_part_1');
        $paymentMethod      = Session::get('ticket_part_2');
        $paymentAgrement    = Session::get('ticket_part_3');



    }

}
