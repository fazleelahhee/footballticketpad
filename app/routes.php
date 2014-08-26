<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::group((Config::get('bondcms')['cache']) ? array('before' => 'cache.fetch', 'after' => 'cache.put') : array(), function () {

    // frontend dashboard
    Route::get('/', ['as' => 'dashboard', 'uses' => 'HomeController@index']);

    // article
    Route::get('/article', array('as' => 'dashboard.article', 'uses' => 'ArticleController@index'));
    Route::get('/article/{id}/{slug?}', array('as' => 'dashboard.article.show', 'uses' => 'ArticleController@show'));

    // news
    Route::get('/news', array('as' => 'dashboard.news', 'uses' => 'NewsController@index'));
    Route::get('/news/{id}/{slug?}', array('as' => 'dashboard.news.show', 'uses' => 'NewsController@show'));

    // tags
    Route::get('/tag/{tag}', array('as' => 'dashboard.tag', 'uses' => 'TagController@index'));

    // categories
    Route::get('/category/{category}', array('as' => 'dashboard.category', 'uses' => 'CategoryController@index'));

    // page
    Route::get('/page', array('as' => 'dashboard.page', 'uses' => 'PageController@index'));
    Route::get('/page/{id}', array('as' => 'dashboard.page.show', 'uses' => 'PageController@show'));

    // photo gallery
    Route::get('/photo_gallery/{id}', array('as' => 'dashboard.photo_gallery.show', 'uses' => 'PhotoGalleryController@show'));

    // contact
    Route::get('/contact', array('as' => 'dashboard.contact', 'uses' => 'FormPostController@getContact'));

    // rss
    Route::get('/rss', array('as' => 'rss', 'uses' => 'RssController@index'));

    // search
    Route::get('/search', ['as' => 'admin.search', 'uses' => 'SearchController@index']);
});

Route::post('/contact', array('as' => 'dashboard.contact.post', 'uses' => 'FormPostController@postContact'), array('before' => 'csrf'));

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

Route::group(array('prefix' => Config::get('bondcms.admin_prefix'), 'namespace' => 'App\Controllers\Admin', 'before' => array('auth.admin', 'assets_admin')), function () {

    // admin dashboard
    Route::get('/', array('as' => 'admin.dashboard', function () {

        return View::make('backend/_layout/dashboard')
            ->with('active', 'home')
            ->with('menu', 'dashboard');
    }));

    //media
    Route::get('media', 'MediaController@showMedia');
    Route::post('media/upload', 'MediaController@uploadAction');
    Route::get('media/list', 'MediaController@showListAction');
    Route::post('media/list_json', 'MediaController@listJsonAction');
    Route::any('media/filemanager', 'MediaController@filemanagerAction');

    Route::get('media/edit/{id}', 'MediaController@editAction')->where('id', '[0-9]+');
    Route::any('media/destroy/{id}', 'MediaController@destroy')->where('id', '[0-9]+');
    Route::get('media/delete/{id}', 'MediaController@deleteAction')->where('id', '[0-9]+');

    //page
    Route::get('pages', array('as'=>'admin.page.index','uses'=>'PageAdminController@showPages'));

    Route::post('pages/list', 'PageAdminController@listAction');
    Route::get('pages/edit/{id}', 'PageAdminController@editAction')->where('id', '[0-9]+');
    Route::get('pages/new', 'PageAdminController@newAction');
    // user
    Route::resource('user', 'UserController');

    Route::get('user/{id}/delete', array('as' => 'admin.user.delete', 'uses' => 'UserController@confirmDestroy'))
        ->where('id', '[0-9]+');

    // blog
    Route::resource('article', 'ArticleController');
    Route::get('article/{id}/delete', array('as' => 'admin.article.delete', 'uses' => 'ArticleController@confirmDestroy'))
        ->where('id', '\d+');

    // news
    Route::resource('news', 'NewsController');
    Route::get('news/{id}/delete', array('as' => 'admin.news.delete', 'uses' => 'NewsController@confirmDestroy'))
        ->where('id', '[0-9]+');
    // news
    Route::resource('faq', 'FaqController');
    Route::get('faq/{id}/delete', array('as' => 'admin.faq.delete', 'uses' => 'FaqController@confirmDestroy'))
        ->where('id', '[0-9]+');
    // category
    Route::resource('category', 'CategoryController');
    Route::get('category/{id}/delete', array('as' => 'admin.category.delete', 'uses' => 'CategoryController@confirmDestroy'))
        ->where('id', '[0-9]+');

    // page
    Route::resource('page', 'PageController');
    Route::get('page/{id}/delete', array('as' => 'admin.page.delete', 'uses' => 'PageController@confirmDestroy'))
        ->where('id', '[0-9]+');

    // photo gallery
    Route::resource('photo_gallery', 'PhotoGalleryController');
    Route::get('photo_gallery/{id}/delete', array('as' => 'admin.photo_gallery.delete', 'uses' => 'PhotoGalleryController@confirmDestroy'))
        ->where('id', '[0-9]+');

    // ajax - blog
    Route::post('article/{id}/toggle-publish', array('as' => 'admin.article.toggle-publish', 'uses' => 'ArticleController@togglePublish'))
        ->where('id', '[0-9]+');

    // ajax - news
    Route::post('news/{id}/toggle-publish', array('as' => 'admin.news.toggle-publish', 'uses' => 'NewsController@togglePublish'))
        ->where('id', '[0-9]+');
    // ajax - faq
    Route::post('faq/{id}/toggle-publish', array('as' => 'admin.faq.toggle-publish', 'uses' => 'FaqController@togglePublish'))
        ->where('id', '[0-9]+');
    // ajax - photo gallery
    Route::post('photo_gallery/{id}/toggle-publish', array('as' => 'admin.photo_gallery.toggle-publish', 'uses' => 'PhotoGalleryController@togglePublish'))
        ->where('id', '[0-9]+');
    Route::post('photo_gallery/{id}/toggle-menu', array('as' => 'admin.photo_gallery.toggle-menu', 'uses' => 'PhotoGalleryController@toggleMenu'))
        ->where('id', '[0-9]+');

    // ajax - page
    Route::post('page/{id}/toggle-publish', array('as' => 'admin.page.toggle-publish', 'uses' => 'PageController@togglePublish'))
        ->where('id', '[0-9]+');
    Route::post('page/{id}/toggle-menu', array('as' => 'admin.page.toggle-menu', 'uses' => 'PageController@toggleMenu'))
        ->where('id', '[0-9]+');


    // ajax - form post
    Route::post('form-post/{id}/toggle-answer', array('as' => 'admin.form-post.toggle-answer', 'uses' => 'FormPostController@toggleAnswer'))
        ->where('id', '[0-9]+');

    // file upload photo gallery
    Route::post('/photo-gallery/upload/{id}', array('as' => 'admin.photo.gallery.upload.image', 'uses' => 'PhotoGalleryController@upload'))
        ->where('id', '[0-9]+');
    Route::post('/photo-gallery-delete-image', array('as' => 'admin.photo.gallery.delete.image', 'uses' => 'PhotoGalleryController@deleteImage'));

    // settings
    Route::get('/settings/website', array('as' => 'admin.settings', 'uses' => 'SettingController@index'));
    Route::get('/settings/general', array('as' => 'admin.settings', 'uses' => 'SettingController@generalSettings'));
    Route::post('/settings', array('as' => 'admin.settings.save', 'uses' => 'SettingController@save'), array('before' => 'csrf'));

    // form post
    Route::resource('form-post', 'FormPostController', array('only' => array('index', 'show', 'destroy')));
    Route::get('form-post/{id}/delete', array('as' => 'admin.form-post.delete', 'uses' => 'FormPostController@confirmDestroy'))
        ->where('id', '[0-9]+');

    // slider
    Route::get('/slider', array('as' => 'admin.slider', function () {
        return View::make('backend/slider/index');
    }));

    // slider
    Route::resource('slider', 'SliderController', array('only' => array('index', 'create', 'edit', 'update', 'destroy')));
    Route::get('slider/{id}/delete', array('as' => 'admin.slider.delete', 'uses' => 'SliderController@confirmDestroy'))
        ->where('id', '[0-9]+');

    // file upload slider
    Route::post('/slider/upload/{id}', array('as' => 'admin.slider.upload.image', 'uses' => 'SliderController@upload'))
        ->where('id', '[0-9]+');
    Route::post('/slider-delete-image', array('as' => 'admin.slider.delete.image', 'uses' => 'SliderController@deleteImage'));

    //slider images meta save
    Route::post('/slider/save/image-meta', array('as'=> 'admin.slider.save.imagemeta', 'uses'=>'SliderController@saveImageMeta'));
    Route::post('/slider/delete/image', array('as'=> 'admin.slider.delete.image.by.id', 'uses'=>'SliderController@deleteImageById'));

    // menu-managment
    Route::resource('menu', 'MenuController');
    Route::post('menu/save', array('as' => 'admin.menu.save', 'uses' => 'MenuController@save'));
    Route::get('menu/{id}/delete', array('as' => 'admin.menu.delete', 'uses' => 'MenuController@confirmDestroy'))
        ->where('id', '[0-9]+');
    Route::post('menu/{id}/toggle-publish', array('as' => 'admin.menu.toggle-publish', 'uses' => 'MenuController@togglePublish'))
        ->where('id', '[0-9]+');

    // log
    Route::any('log', ['as' => 'admin.log', 'uses' => 'LogController@index']);

    //filemanager
    Route::get('filemanager/show-admin', 'FilemanagerController@showInAdmin');

});

Route::group(array('namespace' => 'App\Controllers\Admin', 'before' => array('auth.admin', 'assets_admin')), function () {
    // filemanager
    Route::get('filemanager/show', 'FilemanagerController@index');
});

//// login
//Route::get('/'.Config::get('bondcms.admin_prefix').'/login', array('as' => 'admin.login', 'before'=> 'assets_admin', function () {
//
//    return View::make('backend/auth/login');
//}));

Route::group(array('namespace' => 'App\Controllers\Admin', 'before' => 'assets_admin'), function () {
    // admin auth
    Route::get('/' . Config::get('bondcms.admin_prefix') . '/logout', array('as' => 'admin.logout', 'uses' => 'AuthController@getLogout'));
    Route::get('/' . Config::get('bondcms.admin_prefix') . '/login', array('as' => 'admin.login', 'uses' => 'AuthController@getLogin'));
    Route::post('/' . Config::get('bondcms.admin_prefix') . '/login', array('as' => 'admin.login.post', 'uses' => 'AuthController@postLogin'));

    // admin password reminder
    Route::get('/' . Config::get('bondcms.admin_prefix') . '/forgot-password', array('as' => 'admin.forgot.password', 'uses' => 'AuthController@getForgotPassword'));
    Route::post('/' . Config::get('bondcms.admin_prefix') . '/forgot-password', array('as' => 'admin.forgot.password.post', 'uses' => 'AuthController@postForgotPassword'));

    Route::get('/' . Config::get('bondcms.admin_prefix') . '/{id}/reset/{code}', array('as' => 'admin.reset.password', 'uses' => 'AuthController@getResetPassword'))
        ->where('id', '[0-9]+');
    Route::post('/' . Config::get('bondcms.admin_prefix') . '/reset-password', array('as' => 'admin.reset.password.post', 'uses' => 'AuthController@postResetPassword'));
});

/*
|--------------------------------------------------------------------------
| Football tickets
|--------------------------------------------------------------------------
*/
//freaking does not work properly with session
//Route::post('/ticket/registration', array('before' => 'csrf', 'as' => 'ticket.registrations', 'uses' => 'CustomerController@registrationAction'));
Route::post('/ticket/registration', array( 'as' => 'ticket.registrations', 'uses' => 'CustomerController@registrationAction'));
/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
*/

Route::group((Config::get('bondcms')['cache']) ? array('before' => 'cache.fetch', 'after' => 'cache.put') : array(), function () {
    //should be an end
    Route::any( '{all}', 'IndexController@showPage')->where('all', '.*');
});

// error
App::error(function (Exception $exception) {
    Log::error($exception);
    $error = $exception->getMessage();
    return Response::view('errors.error', compact('error'));
});

// 404 page not found
App::missing(function () {
    return Response::view('errors.missing', array(), 404);
});
