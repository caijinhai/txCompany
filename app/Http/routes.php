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

Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'IndexController@index');
	Route::get('/screen', 'IndexController@screen');
	Route::get('/product', 'IndexController@product');
	Route::get('/about', 'IndexController@about');
	Route::get('/concat', 'IndexController@concat');
	Route::get('/news', 'IndexController@news');

});