<?php

class CustomerController extends BaseController
{

    public function __construct()
    {

    }

    /**
     * Register customer
     */
    protected function registrationAction()
    {
        $result = TicketSoap::process('customer.create', [
            ['email'      => 'mail@example.org',
             'firstname'  => 'Dough',
             'lastname'   => 'Deeks',
             'password'   => 'password',
             'website_id' => 1,
             'store_id'   => 1,
             'group_id'   => 1
            ]
        ]);

        var_dump($result);
    }

    protected function customerList()
    {
        $customers = TicketSoap::process('customer.list');
        var_dump($customers);
    }
}
