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

    public function publishTicket($ticketId = '') {
        $data =  array();
        $customer = Session::get('customer');
        $data['ticketInformation']   = Session::get('ticket_part_1');
        $data['paymentMethod']       = Session::get('ticket_part_2');
        $data['paymentAgreement']    = Session::get('ticket_part_3');

        $node = FootBallEvent::find($ticketId);
        $info = $node->toArray();
        $attributeSet = TicketSoap::process('product_attribute_set.list');
        $product = array(
            'simple',
            $attributeSet[0]['set_id'],
            "-{$ticketId}-{$customer['entity_id']}-{$data['ticketInformation']['ticket_type']}-{$data['ticketInformation']['loc_block']}-{$data['ticketInformation']['loc_row']}",
            array(
                'categories' => array(2),
                'websites' => array(1),
                'name' => $info['title'],
                'description' => $info['content'],
                'short_description' => $info['content'],
                'weight' => '1',
                'status' => '1',
                'url_key' => $info['slug'],
                'url_path' => $info['slug'],
                'visibility' => '4',
                'price' => $data['ticketInformation']['price'],
                'tax_class_id' => 0,
                'meta_title' => $info['title'],
                'meta_keyword' => strip_tags($info['content']),
                'meta_description' => strip_tags($info['content']),
                'stock_data' => array(
                    'qty' => 100,
                    'is_in_stock'=>1,
                    'min_sale_qty'=> 1

                ),

            )
        );
        $response = TicketSoap::process('catalog_product.create', $product);
        if ($response) {
            $relatedTicket = new RelatedTicket();
            $relatedTicket->event_id = $ticketId;
            $relatedTicket->product_id = $response;
            $relatedTicket->ticket = json_encode($data);
            $relatedTicket->price = $data['ticketInformation']['price'];
            $relatedTicket->save();
        }
        // related products
        // RelatedTicket


    }

}
