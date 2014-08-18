<?php namespace Bond\Composers;

use Page;
use View;
use Response;

class RegistrationComposer
{

    public function compose($view)
    {

        $view->with('registrationForm',
            View::make("footballticket::registration")
                ->render()
        );
    }
}
