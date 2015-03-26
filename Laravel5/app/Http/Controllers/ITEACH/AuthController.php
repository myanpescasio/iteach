<?php namespace App\Http\Controllers\ITEACH;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Auth;
use Input;
use Session;

class AuthController extends Controller {

	//Log in page controller
	public function login(){

		$data = [];
		$data += ['type' => 'li'];
		$errors = Session::get('errors', []); //gets the errors from the session, returns empty array if none
		$old = Session::get('old', ['username' => '']);
		Session::forget('errors');									//forget errors for when refresh is done, errors disappear
		Session::forget('old');
		return view('iteach.auth.login', compact('data', 'errors', 'old'));
	
	}

	//Log in using input values and then redirect to login page with error data
	public function attempt(){

		if(Input::get('username') == null)			//if no input (manually entered /attempt_login) is placed, redirect to index
			return redirect()->intended('index');

		$username = Input::get('username');
		$password = Input::get('password');
		if(Auth::attempt(['username' => $username, 'password' => $password])){

			//If authentication is successful, redirect to home
			return redirect()->intended('home');

		}

		//provides error data and places into temporary session
		$errors = [];
		$errors += ['auth' => 'Username/Password match is invalid'];
		$old = ['username' => $username];
		Session::put('errors', $errors);	//place into section
		Session::put('old', $old);

		return redirect()->intended('login');	//This is done to hide submitted data from the url
	
	}
	
	//Allows users to access home using guest sessions
	public function use_guest(){

		Session::put('guest', true);	//set the session's guest value to true (this will bypass 'Authenticate' middleware)
		return redirect()->intended('home');	//redirect to home

	}

	//Sign up page controller
	public function signup(){

		$data = [];
		$data += ['type' => 'su'];
		$errors = Session::get('errors', []);
		$old = Session::get('old', ['username' => '']);
		Session::forget('errors');
		Session::put('old', $old);
		
		return view('iteach.auth.sign-up', compact('data', 'errors', 'old'));
	}

	//First page to be viewed
	//Users select whether to log in, sign up, or continue as guest.
	public function index(){

		if(!Auth::check()){
			Session::forget('guest');	//Whenever the guests return to this page, their session is over
			return view('iteach.auth.index');
		}
		else
			return redirect()->intended('home');	//If a logged user enters this, they will be redirected to /home

	}

}
