<?php

class MailChimpController extends BaseController {

    public function subscribe() {
        try {
            $input = Input::all();

//            $subscrib = new Subscribe();
//            $subscrib->email = $input['email'];
//            $subscrib->save();
            MailchimpWrapper::lists()->subscribe('071c5abfb5', array('email'=> $input['email']));
        } catch (Exception $e) {
            $response = Response::make( json_encode( ['message' => $e->getMessage() ]) , '400' );
            $response->header('Content-Type', 'application/json');
            return $response;
        }
        $response = Response::make( json_encode( ['message' => 'submitted' ]) , '200' );
        $response->header('Content-Type', 'application/json');
        return $response;
    }
}