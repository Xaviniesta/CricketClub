<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getHome() {
		return View::make('home');
	}

	public function getScoreboard() {
		return View::make('scoreboard');
	}
	public function getAdmin() {
		return View::make('adminlogin');
	}

	public function postAdminLogin() {

		$validator = Validator::make(Input::all(), 
            array(
                'password' => 'required'
            )
        );

		if ($validator->fails()) {
            return Redirect::route('home')
                ->withErrors($validator);
            //return View::make('account.create');
        } else {

        	$user = User::create(array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            ));

        	 $auth = Auth::attempt(array(
        	 	'username' => Input::get('username'),
                'password' => Input::get('password')
            ), false);

        	 if ($auth || $user) {
        	 	 return Redirect::route('scoreboard');
        	 } else {
        	 	return "wrong password";
        	 }
        }
	}

}
