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

Route::get('/', 'HomeController@showScore');

Route::get('admin', 'HomeController@admin');

Route::post('admin/login', array('before' => 'csrf', function ()
{
	$credentials = array(
		'username' => Input::get('username'),
		'password' => Input::get('password')
	);
	if (Auth::attempt($credentials, true)) {
		return Redirect::to('/');
	} else {
		return 'Du finns inte i databasen =(';
	}
}));

Route::get('admin/logout', function ()
{
	Auth::logout();
	return Redirect::to('/');
});