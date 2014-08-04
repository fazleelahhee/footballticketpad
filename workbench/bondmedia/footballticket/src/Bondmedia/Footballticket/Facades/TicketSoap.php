<?php
namespace Bondmedia\Footballticket\Facades;

use DaveJamesMiller\Breadcrumbs\Exception;
use Illuminate\Support\Facades\Facade;
use Config;

class TicketSoap extends Facade {
    private static $client = null;
    private static $session =  null;

    private static function connect() {
        try {
            static::$client = new SoapClient(Config::get('api.mage_soap_api_url').'api/soap/?wsdl');
            static::$session = static::$client->login(Config::get('api.mage_soap_api_user'), Config::get('api.mage_soap_api_key'));
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        } catch (\SoapFault $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }

    }
    public static function process($action, array $options) {
        if(!static::$client|| !static::$session) {
            static::connect();
        }

        if(empty($action)) {
            return;
        }

        if(static::$client instanceof \SoapClient) {
            return static::$client->call(static::$session,$action, $options);
        } else {
            throw new Exception('Can not create soap connection');
        }
    }


}