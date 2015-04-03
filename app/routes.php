<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::pattern('cssPath', '(.*)');
Route::get('css/{cssPath}', 'MiscFileController@getCSS');

Route::pattern('jsPath', '(.*)');
Route::get('js/{jsPath}', 'MiscFileController@getJS');

Route::get('/', 'HomeController@v1');

Route::get('/home', 'HomeController@v1');

Route::get('/archive/{page}', 'ArchiveController@showList');
Route::get('/archive', 'ArchiveController@showList');