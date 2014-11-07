<?php
use TransactPRO\Gate\GateClient;

class PaymentGatewayController extends BaseController {

    public function gatewayReturn () {
        $merchantTransactionId = Input::get('merchant_transaction_id');
        var_dump($merchantTransactionId);
        if(empty($merchantTransactionId)) {
            //return  Redirect::to('/');
        }

        $gateClient = new GateClient(array(
            'apiUrl'    => 'https://87.110.182.18:8443/gw2test',
            'guid'      => 'HPUG-8848-BXY1-99D6',
            'pwd'       => 'K$Eg46ZFPzDD',
            'verifySSL' =>  false
        ));

        $response = $gateClient->statusRequest(array(
            'request_type'        => 'transaction_status',
            'init_transaction_id' => '6a44adb06087fee3745bb9a70d89e61a8fb95dda',
            'f_extended'          => '5'
        ));

        var_dump($response);

        $response = $gateClient->chargeHold(array(
            'init_transaction_id' => '6a44adb06087fee3745bb9a70d89e61a8fb95dda'
        ));

        var_dump($response);

        die();
    }

    public function gatewayPaymentRequest() {
        $auth = Config::get('transactpro.auth');
        $gateClient = new GateClient($auth);

        //userip: if local database or stage should provided white label ip address
        $userIP = App::environment('local', 'stage') ? '81.137.255.206' : $_SERVER['REMOTE_ADDR'];
        $country = App::environment('local', 'stage') ?  'LV': Input::get('country');


        $response = $gateClient->initDms(array(
            'rs'                      => Config::get('transactpro.rs'),
            'merchant_transaction_id' =>  microtime(true),
            'user_ip'                 => $userIP,
            'description'             => Input::get('product_title'),
            'amount'                  => Input::get('amount'),
            'currency'                => Config::get('transactpro.currency'),
            'name_on_card'            => Input::get('name_on_card'),
            'street'                  => Input::get('street'),
            'zip'                     => Input::get('zip'),
            'city'                    => Input::get('city'),
            'country'                 => $country,
            'state'                   => Input::get('state'),
            'email'                   => Input::get('email'),
            'phone'                   => Input::get('phone'),
            'merchant_site_url'       => Input::get('merchant_site_url'),
            'card_bin'                => substr('card_number', 0, 6),
            'bin_name'                => Input::get('name_on_card'),
            'bin_phone'               => Input::get('phone')
        ));

        
    }

}
