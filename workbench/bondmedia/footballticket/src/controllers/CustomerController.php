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

            $rules     = array(
                'first_name'            => 'Required|Min:3|Max:60|Alpha',
                'last_name'             => 'Required|Min:3|Max:60|Alpha',
                'email'                 => 'Required|Between:3,64|Email|Confirmed',
                'email_confirmation'    => 'Required|Between:3,64|Email',
                'country_code'          => 'Min:3',
                'contact_no'            => 'AlphaNum|Min:8',
                'password'              => 'Required|AlphaNum|Between:4,16|Confirmed',
                'password_confirmation' => 'Required|AlphaNum|Between:4,16',
                'terms_n_conditions'    => 'Required|Max:1',
                'newsletters'           => 'Max:1'
            );
            $input     = Input::all();
            $validator = Validator::make($input, $rules);

            if ($validator->fails()) {
                $messages = $validator->messages();
                $response = Response::make(json_encode($messages), '400');
                $response->header('Content-Type', 'application/json');
                return $response;
            }

            try {
                $result = TicketSoap::process('customer.create', [
                    ['email'      => $input['email'],
                     'firstname'  => $input['first_name'],
                     'lastname'   => $input['last_name'],
                     'password'   => $input['password'],
                     'website_id' => 1,
                     'store_id'   => 1,
                     'group_id'   => 1
                    ]
                ]);
            } catch (Exception $e) {
                $response = Response::make(json_encode(['error' => $e->getMessage()]), '400');
                $response->header('Content-Type', 'application/json');
                return $response;
            }
            try {
                if (is_numeric($result)) {
                    $customerId = $result;
                    $result     = TicketSoap::process('customer_address.create', [
                        'customerId'  => $customerId,
                        'addressdata' => ['firstname'           => $input['first_name'],
                                          'lastname'            => $input['last_name'],
                                          'telephone'           => $input['contact_no'],
                                          'email'               => $input['email'],
                                          'street'              => array(
                                              'not found'),
                                          'city'                => 'not found',
                                          'postcode'            => 'not found',
                                          'country_id'          => 'US',
                                          'is_default_billing'  => false,
                                          'is_default_shipping' => false
                        ]
                    ]);
                    $response   = Response::make(json_encode(['message' => 'user successfully created.', 'addressId' => $result, 'userId'=>$customerId]), '200');
                    $response->header('Content-Type', 'application/json');
                    return $response;
                } else {
                    $response = Response::make(json_encode($result), '400');
                    $response->header('Content-Type', 'application/json');
                    return $response;
                }
            } catch (Exception $e) {
                $response = Response::make(json_encode(['error' => 'Address: ' . $e->getMessage()]), '400');
                $response->header('Content-Type', 'application/json');
                return $response;
            }


//        } else {
//            $response = Response::make('Invalid Request', '406');
//            $response->header('Content-Type', 'application/json');
//            return $response;
//        }
    }

    protected function customerList()
    {
        $customers = TicketSoap::process('customer.list');
        var_dump($customers);
    }
}
