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

/* handling files */
Route::pattern('path', '(.*)');
Route::get('css/{path}', 'MiscFileController@getCSS');
Route::get('js/{path}', 'MiscFileController@getJS');
Route::get('addons/{path}', 'MiscFileController@getAddOn');

/* end */

/* front controller */

Route::get('/', 'HomeController@v1');

Route::get('/home', 'HomeController@v1');

Route::get('/archive/{page}', 'ArchiveController@showList');
Route::get('/archive', 'ArchiveController@showList');

/* end */

/* back controller*/

Route::group(array('domain' => 'kitchen.kydz.dev'), function(){
    Route::get('/cook/write', 'CookController@write');
    Route::post('/cook/save', 'CookController@save');
});

/* end */
