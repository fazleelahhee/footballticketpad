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
            Session::put('ticket_part_1_'.$ticketId, $data);
            //redirect to second page
            return Redirect::route('ticket.sell.2', array('id'=>$ticketId));
        }

        $ticketAggregatedPrice = DB::table('events_related_tickets')
            ->select(DB::raw('MIN(price) AS min_price, MAX(price) AS max_price, AVG(price) AS avg_price'))
            ->where('event_id', '=', $ticketId)
            ->groupBy('event_id')
            ->first();

        View::share('ticketAggregatedPrice', $ticketAggregatedPrice);

        View::share('body_class', 'pages sell-1 sell1');
        $node = FootBallEvent::find($ticketId);
        return View::make(Template::name('frontend.%s.sell.1'), compact('node'));
    }

    public function ticketSellerInfo($ticketId = '') {
        //$ticket = Input::all();

        if(Session::get('ticket_part_1_'.$ticketId) == '') {
            return Redirect::route('ticket.sell.1', array('id'=>$ticketId));
        }

        if(Request::isMethod('post'))
        {
            $data = Input::all();
            Session::put('ticket_part_2_'.$ticketId, $data);
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

        if(Session::get('ticket_part_1_'.$ticketId) == '' || Session::get('ticket_part_2_'.$ticketId) == '') {
            return Redirect::route('ticket.sell.1', array('id'=>$ticketId));
        }

        if(Request::isMethod('post'))
        {
            $data = Input::all();
            Session::put('ticket_part_3_'.$ticketId, $data);
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
        try {
            $data =  array();
            $customer = Session::get('customer');
            $data['ticketInformation']   = Session::get('ticket_part_1_'.$ticketId);
            $data['paymentMethod']       = Session::get('ticket_part_2_'.$ticketId);
            $data['paymentAgreement']    = Session::get('ticket_part_3_'.$ticketId);

            if(Session::get('ticket_part_1_'.$ticketId) == ''
                || Session::get('ticket_part_2_'.$ticketId) == ''
                || Session::get('ticket_part_2_'.$ticketId) == ''
            ) {
                return Redirect::route('ticket.sell.1', array('id'=>$ticketId));
            }

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
                        'qty' => $data['ticketInformation']['number_of_ticket'],
                        'is_in_stock'=>1,
                        'min_sale_qty'=> 1

                    ),

                )
            );
            $response = TicketSoap::process('catalog_product.create', $product);

            $data['commission_in_per'] = Config::get('ticket.selling_commission');

            if ($response) {
                $relatedTicket = new RelatedTicket();
                $relatedTicket->event_id = $ticketId;
                $relatedTicket->product_id = $response;
                $relatedTicket->ticket = json_encode($data);
                $relatedTicket->price = $data['ticketInformation']['price'];
                $relatedTicket->available_qty = $data['ticketInformation']['number_of_ticket'];
                $relatedTicket->user_id = $customer['entity_id'];
                $relatedTicket->save();
            }
        } catch (Exception $e) {
            $response = Response::make(json_encode(['message' => $e->getMessage()]), '400');
            $response->header('Content-Type', 'application/json');
            return $response;
        }

        Session::put('ticket_part_1_'.$ticketId, '');
        Session::put('ticket_part_2_'.$ticketId, '');
        Session::put('ticket_part_3_'.$ticketId, '');

        $total_selling = $data['ticketInformation']['number_of_ticket'] * $data['ticketInformation']['price'];
        $selling_fees_amount = (($data['ticketInformation']['number_of_ticket'] * $data['ticketInformation']['price']) * Config::get('ticket.selling_commission')) / 100;

        $formData = array(
            'seller_name' => "{$customer['firstname']} {$customer['lastname']}",
            'number_of_ticket' => $data['ticketInformation']['number_of_ticket'],
            'selling_price' => $data['ticketInformation']['price'],
            'selling_fees'=> Config::get('ticket.selling_commission'),
            'selling_fees_amount' => $selling_fees_amount,
            'total_selling' => $total_selling,
            'net_payment' => $total_selling - $selling_fees_amount
        );

        Mail::send('emails.tickets.listing-confirmation', $formData, function ($message) {
            $customer = Session::get('customer');
            $message->from(Config::get('ticket.default_email'), Config::get('ticket.default_name'));
            $message->to($customer['email'], "{$customer['firstname']} {$customer['lastname']}")->subject("Ticket Listing confirmation");
        });

        $response = Response::make(json_encode(['message' => $response]), '200');
        $response->header('Content-Type', 'application/json');
        return $response;

    }

}
