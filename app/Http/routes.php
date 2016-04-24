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
    Route::get('/', 'IndexController@v1');
    Route::get('/index', 'IndexController@v1');
    Route::get('/archive', 'ArchiveController@displayList');
    Route::get('/archive/{id}', 'ArchiveController@displayArticle');
});

Route::group(['middleware' => ['web'], 'domain' => config('app.domains.kitchen'), 'namespace' => 'kitchen'], function () {
    Route::get('/', 'ArchiveController@displayList');
    Route::get('/archive', 'ArchiveController@displayList');
});

Route::auth();

Route::get('/home', 'HomeController@index');
