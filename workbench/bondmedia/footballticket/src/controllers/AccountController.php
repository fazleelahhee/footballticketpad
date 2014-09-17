<?php



class AccountController extends BaseController {

    public function index() {

    }

    public function ticketListing() {
        $node = null;
        View::share('body_class', 'ticket-listing static');
        View::share('tabs', 'listing');
        View::share('node', $node);
        return View::make(Template::name('frontend.%s.account'));
    }

    public function ticketPurchase() {
        $node = null;
        View::share('body_class', 'ticket-purchase static');
        View::share('tabs', 'purchases');
        View::share('node', $node);
        return View::make(Template::name('frontend.%s.purchases'));
    }

    public function ticketSales() {
        $node = null;
        View::share('body_class', 'ticket-sales static');
        View::share('tabs', 'sales');
        View::share('node', $node);
        return View::make(Template::name('frontend.%s.sales'));
    }

    public function accountInformation() {
        $node = null;
        View::share('body_class', 'ticket-account-information static');
        View::share('tabs', 'account-information');
        View::share('node', $node);
        return View::make(Template::name('frontend.%s.account-information'));
    }

    public function address() {
        $node = null;
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
