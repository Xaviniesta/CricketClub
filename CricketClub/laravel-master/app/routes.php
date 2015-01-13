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

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@getHome'
	));
 
Route::get('/players', array(
		'as' => 'players', 
		'uses' => 'PlayerController@getPlayers'
	));
Route::get('/scoreboard', array(
		'as' => 'scoreboard', 
		'uses' => 'HomeController@getScoreboard'
	));
Route::get('/admin', array(
		'as' => 'admin', 
		'uses' => 'HomeController@getAdmin'
	));

Route::post('/admin', array(
		'as' => 'account-login-post', 
		'uses' => 'HomeController@postAdminLogin'
	));