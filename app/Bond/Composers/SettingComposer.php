<?php namespace Bond\Composers;

use Setting;
use Config;

class SettingComposer {

    public function compose($view) {
        $settings = (Setting::get()->first()) ? Setting::get()->first()->toArray() : array();
        $view->with('settings', $settings);
        $view->with('ticketApi', Config::get('api.mage_soap_api_url'));
    }
}