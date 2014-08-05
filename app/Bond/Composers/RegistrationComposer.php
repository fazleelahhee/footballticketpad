<?php namespace Bond\Composers;

use Page;
use View;
use Response;
class RegistrationComposer {

    public function compose($view) {
        $response = View::make("footballticket::registration")->render();
        $view->with('registrationForm', 'Registration Form display!' );
    }
}
