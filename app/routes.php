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
Route::group(array('domain' => Config::get('app.domain')), function(){
    Route::get('/', 'HomeController@v1');

    Route::get('/home', 'HomeController@v1');
    Route::get('/archive/{id}.html', 'ArchiveController@showArticle');
    Route::get('/archive', 'ArchiveController@showList');
});
/* end */

/* back controller*/
Route::group(array('domain' => Config::get('app.kitchenDomain')), function(){
    Route::get('/cook/write', 'CookController@write');
    Route::get('/cook/write/{id}', 'CookController@write');
    Route::post('/cook/save/{id}', 'CookController@save');
    Route::get('/cook/items', 'CookController@items');
    Route::post('/upload', 'CookController@uploadProxy');
});

/* end */
