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
Route::pattern('any', '(.*)');
Route::get('css/{any}', 'MiscFileController@getCSS');
Route::get('js/{any}', 'MiscFileController@getJS');
Route::get('addons/{any}', 'MiscFileController@getAddOn');

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
    Route::get('/cook/write', 'ArchiveController@write');
    Route::get('/cook/write/{id}', 'ArchiveController@write');
    Route::post('/cook/save/{id}', 'ArchiveController@save');
    Route::get('/cook/items', 'ArchiveController@items');

    Route::get('/cook/cates', 'ArchiveController@cates');
    Route::post('/upload', 'MiscFileController@uploadProxy');
});

/* end */
