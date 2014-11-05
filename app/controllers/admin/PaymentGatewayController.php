<?php
use TransactPRO\Gate\GateClient;

class PaymentGatewayController extends BaseController {

    public function gatewayReturn () {
        $merchantTransactionId = Input::get('merchant_transaction_id');

        if(empty($merchantTransactionId)) {
            return  Redirect::to('/');
        }
        if (isset($_GET['merchant_transaction_id'])) {
            var_dump($_POST);
            die();
        }
    }
}
