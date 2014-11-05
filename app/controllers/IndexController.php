<?php
use TransactPRO\Gate\GateClient;

class IndexController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showPage($url) {
        $node = Pages::parseUri($url);
        if(!$node) {
            App::abort(404);
        }
        $template = 'frontend.%s.';
        $pagesMeta = new PagesMeta();

        $template = $template.Template::getTemplate(@$pagesMeta->getMetaKey([
                'page_id' => $node->id,
                'meta_keyword' => 'template'
            ])->meta_content);

        View::share('body_class',Template::getBodyClass($node, Template::getTemplate(@$pagesMeta->getMetaKey([
            'page_id' => $node->id,
            'meta_keyword' => 'template'
        ])->meta_content)));

        View::share('feature_image',@$pagesMeta->getMetaKey([
            'page_id' => $node->id,
            'meta_keyword' => 'feature_image'
        ])->meta_content);

        return View::make(Template::name($template), compact('node'));
    }


    public function test() {

        //1cf19935aba8c3a2c72ccf914e927bcb1d656851


        $gateClient = new GateClient(array(
            'apiUrl'    => 'https://87.110.182.18:8443/gw2test',
            'guid'      => 'HPUG-8848-BXY1-99D6',
            'pwd'       => 'K$Eg46ZFPzDD',
            'verifySSL' =>  false
        ));

        $response = $gateClient->statusRequest(array(
            'request_type'        => 'transaction_status',
            'init_transaction_id' => '1cf19935aba8c3a2c72ccf914e927bcb1d656851',
            'f_extended'          => '5'
        ));

        var_dump($response);
        die();
        $response = $gateClient->init(array(
            'rs'                      => 'BT01',
            'merchant_transaction_id' =>  'A00101',
            'user_ip'                 => '81.137.255.206',
            'description'             => 'Bond media test script',
            'amount'                  => '1300',
            'currency'                => 'USD',
            'name_on_card'            => 'Bond Developer',
            'street'                  => 'Bond Street',
            'zip'                     => 'BOND 007',
            'city'                    => 'BOND City',
            'country'                 => 'LV',
            'state'                   => 'London',
            'email'                   => 'fe@bondmedia.co.uk',
            'phone'                   => '+440000000007',
            'merchant_site_url'       => 'http://bmnew.dev/',
            'card_bin'                => '541333',
            'bin_name'                => 'Bond Developer',
            'bin_phone'               => '+3255666666'
        ));

        if($response instanceof TransactPRO\Gate\Response\Response
            && $response->isSuccessful()
            && !preg_match('/ERROR:/', $response->getResponseContent())
        ) {
            $responseContent = $response->getResponseContent();
            $respContentArray = explode('~',$responseContent);

            //redirection
            if(preg_match('/RedirectOnsite:/', $respContentArray[1]))  {
                $redirection = str_replace('RedirectOnsite:', '', $respContentArray[1]);
                var_dump($redirection);
            }


//            $transactionId = str_replace('OK:','', $respContentArray[0]);
//
//            $response = $gateClient->charge(array(
//                'f_extended'          => '5',
//                'init_transaction_id' => $transactionId,
//                'cc'                  => '5413330000000027',
//                'cvv'                 => '589',
//                'expire'              => '01/15'
//            ));
//            var_dump($response);


        }
        var_dump($response);

        die();
    }
}
