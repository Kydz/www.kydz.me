<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web'], 'domain' => config('app.domains.www'), 'namespace' => 'www'], function () {
    Route::get('/login', 'WatchdogController@displayLogin');
    Route::post('/login', 'WatchdogController@postLogin');
    Route::get('/logout', 'WatchdogController@getLogout');

    Route::get('/', 'IndexController@v1');
    Route::get('/index', 'IndexController@v1');
    Route::get('/archive', 'ArchiveController@displayList');
    Route::get('/archive/{id}', 'ArchiveController@displayArticle');
});

Route::group(['middleware' => ['web'], 'domain' => config('app.domains.kitchen'), 'namespace' => 'kitchen'], function () {
    Route::get('/login', 'WatchdogController@displayLogin');
    Route::post('/login', 'WatchdogController@postLogin');
    Route::get('/logout', 'WatchdogController@getLogout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'ArchiveController@displayList');
        Route::get('/archive', 'ArchiveController@displayList');
        Route::get('/archive/new', 'ArchiveController@displayArticle');
        Route::post('/archive/preview', 'ArchiveController@postPreview');
        Route::get('/archive/{id}', 'ArchiveController@displayArticle');
        Route::post('/archive/{id}', 'ArchiveController@postArticle');
    });
});

Route::get('/home', 'HomeController@index');
