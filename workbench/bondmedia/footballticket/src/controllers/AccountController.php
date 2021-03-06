<?php



class AccountController extends BaseController {

    public function index() {

    }

    public function ticketListing() {
        $node = new stdClass();
        $node->title = 'My Account';
        View::share('body_class', 'ticket-listing static');
        View::share('tabs', 'listing');
        View::share('node', $node);
        $customer = Session::get('customer');

        $events = RelatedTicket::getEventsByUser($customer['entity_id']);

        View::share('events', $events);
        return View::make(Template::name('frontend.%s.account'));
    }

    public function ticketPurchase() {
        $node = new stdClass();
        $node->title = 'My Account';
        View::share('body_class', 'ticket-purchase static');
        View::share('tabs', 'purchases');
        View::share('node', $node);
        $customer = Session::get('customer');
        $purchasedTickets = FootballTicketBuy::getTicketsByUserId($customer['entity_id']);
        $puchasedTicketOutput = array();
        $i = 0;
        if( $purchasedTickets ) {
            foreach($purchasedTickets as $pt) {
                $puchasedTicketOutput[$i]  = $pt;
                $puchasedTicketOutput[$i]->event = FootBallEvent::find($pt->event_id);
                $puchasedTicketOutput[$i]->ticket = json_decode($pt->ticket, true);
                $ticketType = $puchasedTicketOutput[$i]->event->getTicketTypes();

                foreach($ticketType as $tt) {
                    if($tt->id == $puchasedTicketOutput[$i]->ticket['ticketInformation']['ticket_type']) {
                        $puchasedTicketOutput[$i]->ticketType = $tt->title;
                    }
                }

                $i++;
            }
        }

        View::share('purchasedTickets', $puchasedTicketOutput);
        //View::share('events', $events);
        return View::make(Template::name('frontend.%s.purchases'));
    }

    public function ticketSales() {
        $node = new stdClass();
        $node->title = 'My Account';
        View::share('body_class', 'ticket-sales static');
        View::share('tabs', 'sales');
        View::share('node', $node);

        $customer = Session::get('customer');
        $soldTickets = FootballTicketBuy::getSoldTicketsBySellerId($customer['entity_id']);

        $puchasedTicketOutput = array();
        $i = 0;
        if( $soldTickets ) {
            foreach($soldTickets as $pt) {
                $puchasedTicketOutput[$i]  = $pt;
                $puchasedTicketOutput[$i]->event = FootBallEvent::find($pt->event_id);
                $puchasedTicketOutput[$i]->ticket = json_decode($pt->ticket, true);
                $ticketType = $puchasedTicketOutput[$i]->event->getTicketTypes();

                foreach($ticketType as $tt) {
                    if($tt->id == $puchasedTicketOutput[$i]->ticket['ticketInformation']['ticket_type']) {
                        $puchasedTicketOutput[$i]->ticketType = $tt->title;
                    }
                }

                $i++;
            }
        }

        View::share('soldTickets', $puchasedTicketOutput);

        return View::make(Template::name('frontend.%s.sales'));
    }

    public function accountInformation() {
        $node = new stdClass();
        $node->title = 'My Account';
        View::share('body_class', 'ticket-account-information static');
        View::share('tabs', 'account-information');
        View::share('node', $node);
        return View::make(Template::name('frontend.%s.account-information'));
    }

    public function address() {
        $node = new stdClass();
        $node->title = 'My Account';
        View::share('body_class', 'ticket-account-address static');
        View::share('tabs', 'addresses');
        View::share('node', $node);
        return View::make(Template::name('frontend.%s.addresses'));
    }

    public function getCustomerBankInfo() {
        $customer = Session::get('customer');
        $this->setDataToPost(array(
            'customer_id'   => $customer['entity_id'],
            'type'          => 'get'
        ));
        $this->submitPostToApi('customer/index/bank');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function getCustomerAllCardInfo() {
        $customer = Session::get('customer');
        $this->setDataToPost(array(
            'customer_id'   => $customer['entity_id'],
            'type'          => 'get',
            'return'        => 'all'
        ));
        $this->submitPostToApi('customer/index/card');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function setCustomerBankInfo() {
        $customer = Session::get('customer');
        $params = Input::all();
        $params['customer_id']  = $customer['entity_id'];
        $params['type']         = 'set';
        $this->setDataToPost($params);
        $this->submitPostToApi('customer/index/bank');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }


    public function getCustomerCardInfo() {
        $customer = Session::get('customer');
        $this->setDataToPost(array(
            'customer_id'   => $customer['entity_id'],
            'type'          => 'get'
        ));
        $this->submitPostToApi('customer/index/card');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function setCustomerCardInfo() {
        $customer = Session::get('customer');
        $params = Input::all();
        $params['customer_id']  = $customer['entity_id'];
        $params['type']         = 'set';
        $this->setDataToPost($params);
        $this->submitPostToApi('customer/index/card');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function getCustomerInfo() {
        $customer = Session::get('customer');
        $this->setDataToPost(array(
            'customer_id'   => $customer['entity_id'],
            'type'          => 'get'
        ));
        $this->submitPostToApi('customer/index/personal');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function setCustomerInfo() {
        $customer = Session::get('customer');
        $params = Input::all();
        $params['customer_id']  = $customer['entity_id'];
        $params['type']         = 'set';
        $this->setDataToPost($params);
        $this->submitPostToApi('customer/index/personal');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function getCustomerBillingAddress() {
        $customer = Session::get('customer');
        $this->setDataToPost(array(
            'customer_id'   => $customer['entity_id'],
            'type'          => 'get',
            'address_type'  => 'billing'
        ));
        $this->submitPostToApi('customer/index/address');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function setCustomerBillingAddress() {
        $customer = Session::get('customer');
        $params = Input::all();
        $params['customer_id']  = $customer['entity_id'];
        $params['type']         = 'set';
        $params['address_type'] = 'billing';

        $this->setDataToPost($params);
        $this->submitPostToApi('customer/index/address');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function getCustomerShippingAddress() {
        $customer = Session::get('customer');
        $this->setDataToPost(array(
            'customer_id'   => $customer['entity_id'],
            'type'          => 'get',
            'address_type'  => 'shipping'
        ));
        $this->submitPostToApi('customer/index/address');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }

    public function setCustomerShippingAddress() {
        $customer = Session::get('customer');
        $params = Input::all();
        $params['customer_id']  = $customer['entity_id'];
        $params['type']         = 'set';
        $params['address_type'] = 'shipping';

        $this->setDataToPost($params);
        $this->submitPostToApi('customer/index/address');
        $this->setApiResponseHeader();
        echo $this->getApiResponse();
    }
}
