<?php
class CustomerController extends BaseController {

    public function __construct() {

    }

    public function registrationAction() {
        $configs = Config::get('api.mage_soap_api_user');
        var_dump($configs);
    }
}
