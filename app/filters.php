<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function ($request) {
    //
});


App::after(function ($request, $response) {
    //
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

/*
Route::filter('auth', function () {

    if (Auth::guest()) return Redirect::guest('login');
});
*/

// Sentry User Auth Filter
Route::filter('auth.admin', function () {

    if (!Sentry::check()) {
        return Redirect::route('admin.login');
    }
});

Route::filter('auth.basic', function () {
    return Auth::basic();
});

Route::filter('assets_admin', function () {
    Assets::setStyles([
        'bootstrap'             => "css/bootstrap.min.css",
        'font-awesome'          => "css/font-awesome.min.css",
        'smartadmin-production' => "css/smartadmin-production.min.css",
        'smartadmin-skins'      => "css/smartadmin-skins.min.css",
        'demo'                  => "css/demo.min.css",

    ], true);

    Assets::setScripts([
        'pace'              => "js/plugin/pace/pace.min.js",
        'jquery'            => "js/libs/jquery-2.0.2.min.js",
        'jquery-ui'         => "js/libs/jquery-ui-1.10.3.min.js",
        'bootstrap'         => "js/bootstrap/bootstrap.min.js",
        'SmartNotification' => "js/notification/SmartNotification.min.js",
        'jarvis.widget'     => "js/smartwidgets/jarvis.widget.min.js",
        'easy-pie-chart'    => "js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js",
        'sparkline'         => "js/plugin/sparkline/jquery.sparkline.min.js",
        'validate'          => "js/plugin/jquery-validate/jquery.validate.min.js",
        'maskedinput'       => "js/plugin/masked-input/jquery.maskedinput.min.js",
        'select2'           => "js/plugin/select2/select2.min.js",
        'bootstrap-slider'  => "js/plugin/bootstrap-slider/bootstrap-slider.min.js",
        'mb.browser'        => "js/plugin/msie-fix/jquery.mb.browser.min.js",
        'fastclick'         => "js/plugin/fastclick/fastclick.min.js",
        'demo'              => "js/demo.min.js",
        'app'               => "js/app.min.js"
    ], true);
});
/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function () {

    if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function () {

    if (Session::token() != Input::get('_token')) {
        throw new Illuminate\Session\TokenMismatchException;
    }
});

/*
|--------------------------------------------------------------------------
| Route Cache Filter
|--------------------------------------------------------------------------
*/
Route::filter('cache.fetch', 'Bond\Filters\CacheFilter@fetch');
Route::filter('cache.put', 'Bond\Filters\CacheFilter@put');
