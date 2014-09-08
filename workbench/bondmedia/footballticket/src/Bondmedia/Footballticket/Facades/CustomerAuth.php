<?php
namespace Bondmedia\Footballticket\Facades;


use Illuminate\Support\Facades\Facade;
use Config;

class CustomerAuth extends Facade {
        private static $magentoLoaded = false;

        protected static function loadMangento() {
            $api_path = Config::get('api.mage_soap_api_path');
            require_once("{$api_path}app/Mage.php");
            umask(0);
            Mage::app('default');
            static::$magentoLoaded = true;
        }

        public static function login($email='', $password='') {

        }

        public static function check() {

        }

        public static function logout() {

        }
}

