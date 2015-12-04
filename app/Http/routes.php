<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'catalogController@getIndex');

Route::get('/catalog', 'catalogController@getIndex');

Route::post('/catalog', 'catalogController@postCatalog');

Route::get('/blog', 'blogController@getBlog');

Route::post('/blog', 'blogController@postBlog');

Route::get('/contact', 'contactController@getContact');

Route::post('/contact', 'contactController@postContact');
