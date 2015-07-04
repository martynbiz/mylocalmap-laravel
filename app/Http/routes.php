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

Route::get('/', 'IndexController@index');
Route::get('/map', 'IndexController@map');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('listings', 'ListingsController');


// admin/...

Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function() {

	// admin/
	Route::resource('listings', 'Admin\ListingsController');
});
