<?php

use Bond\Services\Mailer;

class FormPostController extends BaseController {

    protected $formPost;

    public function __construct(FormPost $formPost) {

        $this->formPost = $formPost;
    }

    public function getContact() {

        return View::make(Template::name('frontend.%s.contact.form'));
    }

    public function postContact() {

        $formData = array(
            'sender_name_surname' => Input::get('sender_name_surname'),
            'sender_email'        => Input::get('sender_email'),
            'sender_phone_number' => Input::get('sender_phone_number'),
            'subject'             => '',
            'post'                => Input::get('message')
        );

        $rules = array(
            'sender_name_surname' => 'required',
            'sender_email'        => 'required|email',
            'sender_phone_number' => 'required',
            //'subject'             => 'required',
            'post'                => 'required'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {
            $response = Response::make(json_encode(array('result' => $validation->messages())), 400);
            $response->header('Content-Type', 'application/json');
            return $response;
        }

        $formData['sender_message'] = $formData['post'];

        Mail::send('emails.contact-form.form', $formData, function ($message) {
            $message->from(Input::get('sender_email'), Input::get('sender_name_surname'));
            $message->to('felahee@gmail.com', 'Fazle Elahee')->subject("Football Ticketpad contact form");
        });


        /*
        $mailer = new Mailer;
        $mailer->send('emails.contact-form.form', 'admin@bondmedia.co.uk', Input::get('subject'), $formData);
        */

        $formPost = new FormPost();
        $formPost->sender_name_surname = $formData['sender_name_surname'];
        $formPost->sender_email = $formData['sender_email'];
        $formPost->sender_phone_number = $formData['sender_phone_number'];
        $formPost->subject = $formData['subject'];
        $formPost->message = $formData['post'];
        $formPost->save();

        $response = Response::make(json_encode(array('result' => 'success')), 200);
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function postConrporatForm() {

    }

    public function postGroupPurchase() {

    }
}
