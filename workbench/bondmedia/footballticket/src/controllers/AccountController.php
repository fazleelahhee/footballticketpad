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

}
