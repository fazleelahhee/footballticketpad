<?php

class CheckoutController extends BaseController {
    public function index($id='') {
        $customer = Session::get('customer');
        $ticket = RelatedTicket::getTicketByTicketId($id);
        $shoppingCartId = TicketSoap::process('cart.create', array('default'));

        if (isset($customer['entity_id'])) {
            //get customer address ids, shipping address
            $addressParams = array(
                'customer_id'   => $customer['entity_id'],
                'type'          => 'get',
                'address_type'  => 'billing'
            );

            $this->setDataToPost($addressParams);
            $this->submitPostToApi('customer/index/address');
            $response = $this->getApiResponse();
            $billing = json_decode($response, true);
            View::share('billing', $billing['data']);

            $addressParams['address_type'] = 'shipping';
            $this->setDataToPost($addressParams);
            $this->submitPostToApi('customer/index/address');
            $response = $this->getApiResponse();
            $shipping = json_decode($response, true);
            View::share('shipping', $shipping['data']);
        }

        $shoppingCartId = Session::put('shoppingCartId', $shoppingCartId);
        View::share('body_class', 'pages checkout checkout');
        View::share('customer', $customer);
        View::share('ticket', $ticket);
        View::share('productId', $id);
        $node = new stdClass();
        $node->title = "checkout";
        return View::make(Template::name('frontend.%s.checkout'), compact('node'));
    }

    public function order($id) {
        $customer = Session::get('customer');
        $input = Input::all();
        $email = uniqid()."@bondmedia.co.uk";
        $shoppingCartId = Session::get('shoppingCartId');

        try {
            if (!$customer) {
                $newCustomer = array(
                    'first_name'            => $input['first_name'],
                    'last_name'             => $input['last_name'],
                    'email'                 => $input['email'],
                    'email_confirmation'    => $input['email_confirmation'],
                    'password_confirmation' => $input['password_confirmation'],
                    'password'              => $input['password'],
                    'terms_n_conditions'    => true,
                    'contact_no'            => $input['contact_no']
                );
                $this->setDataToPost($newCustomer);
                $response = $this->submitPostToApi( route('ticket.registrationsInternal'),false)->getApiResponse();
                $user = json_decode($response);

                if($user->message != "user successfully created.") {
                    throw new Exception($response);
                }

                //update user address
                $params = array();
                $params['customer_id']  = $user->userId;
                $params['type']         = 'set';
                $params['address_type'] = 'billing';
                $params['vat_id']       = '';
                $params['company']      = '';
                $params['street']       = $input['street'];
                $params['country_id']   = 'GB';
                $params['postcode']     = $input['postcode'];
                $params['city']         = $input['city'];
                $params['telephone']    = $input['contact_no'];

                //set billing
                $this->setDataToPost($params);
                $this->submitPostToApi('customer/index/address');

                //set shipping
                $params['address_type'] = 'shipping';
                $this->setDataToPost($params);
                $this->submitPostToApi('customer/index/address');
                $customerId = $user->userId;
            } else {
                //customer id from, session
                $customerId = $customer['entity_id'];
                if ($input['new_shipping_address'] == 'shipping') {
                    //update user address
                    $params = array();
                    $params['customer_id']  = $customerId;
                    $params['type']         = 'set';
                    $params['address_type'] = 'billing';
                    $params['vat_id']       = '';
                    $params['company']      = '';
                    $params['street']       = $input['street'];
                    $params['country_id']   = 'GB';
                    $params['postcode']     = $input['postcode'];
                    $params['city']         = $input['city'];
                    $params['telephone']    = $input['contact_no'];

                    //set billing
                    $this->setDataToPost($params);
                    $this->submitPostToApi('customer/index/address');

                    //set shipping
                    $params['address_type'] = 'shipping';
                    $this->setDataToPost($params);
                    $this->submitPostToApi('customer/index/address');
                }
            }

            //get customer address ids, shipping address
            $addressParams = array(
                'customer_id'   => $customerId,
                'type'          => 'get',
                'address_type'  => 'billing'
            );

            $this->setDataToPost($addressParams);
            $this->submitPostToApi('customer/index/address');
            $response = $this->getApiResponse();
            $billing = json_decode($response, true);
            var_dump($billing);

            $addressParams['address_type'] = 'shipping';
            $this->setDataToPost($addressParams);
            $this->submitPostToApi('customer/index/address');
            $response = $this->getApiResponse();
            $shipping = json_decode($response, true);
            var_dump($shipping);

            // Set customer, for example guest
            $resultCustomerSet = TicketSoap::process('cart_customer.set', array( $shoppingCartId, array(
                'entity_id' => $customerId,
                'mode'      => 'customer'
            )));

            // Set customer addresses, for example guest's addresses
//            $arrAddresses = array(
//                array(
//                    "mode" => "shipping",
//                    "firstname" => "testFirstname",
//                    "lastname" => "testLastname",
//                    "company" => "testCompany",
//                    "street" => "testStreet",
//                    "city" => "testCity",
//                    "region" => "testRegion",
//                    "postcode" => "testPostcode",
//                    "country_id" => "id",
//                    "telephone" => "0123456789",
//                    "fax" => "0123456789",
//                    "is_default_shipping" => 1,
//                    "is_default_billing" => 0
//                ),
//                array(
//                    "mode" => "billing",
//                    "firstname" => "testFirstname",
//                    "lastname" => "testLastname",
//                    "company" => "testCompany",
//                    "street" => "testStreet",
//                    "city" => "testCity",
//                    "region" => "testRegion",
//                    "postcode" => "testPostcode",
//                    "country_id" => "id",
//                    "telephone" => "0123456789",
//                    "fax" => "0123456789",
//                    "is_default_shipping" => 0,
//                    "is_default_billing" => 1
//                )
//            );

            $arrAddresses = array(
                array(
                    "mode" => "shipping",
                    "address_id" => $shipping['data']['entity_id']
                ),
                array(
                    "mode" => "billing",
                    "address_id" => $billing['data']['entity_id']
                )
            );

            //address added to checkout

            $resultCustomerAddresses = TicketSoap::process("cart_customer.addresses", array($shoppingCartId, $arrAddresses ));

            // product added to checkout
            $arrProducts = array(
                array(
                    "product_id" => $id,
                    "qty" => $input['qty']
                )
            );

            $resultCartProductAdd = TicketSoap::process("cart_product.add", array($shoppingCartId, $arrProducts));
            $shoppingCartProducts = TicketSoap::process("cart_product.list", array($shoppingCartId));


    //

            $shipping  = TicketSoap::process("cart_shipping.method", array($shoppingCartId, 'flatrate_flatrate'));



            $paymentMethod = array(
                "method" => "checkmo"
            );

            $resultPaymentMethod = TicketSoap::process("cart_payment.method", array($shoppingCartId, $paymentMethod));

            // create order
            $resultOrderCreation = TicketSoap::process("cart.order", array($shoppingCartId, null, null));
            if (!empty($resultOrderCreation)) {
                $response = Response::make(json_encode(array('message'=>'order has been successfully placed', 'orderId'=>$resultOrderCreation)), '200');
                $response->header('Content-Type', 'application/json');
                return $response;
            }
        } catch (Exception $e) {
            $response = Response::make($e->getMessage(), '400');
            $response->header('Content-Type', 'application/json');
            return $response;
        }
    }
}