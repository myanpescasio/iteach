<?php namespace App\Http\Controllers\ITEACH;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Auth;
use Input;
use Session;

class HomeController extends Controller {

	function home(){

		if(Auth::check())	//If authentication is done, user is not guest
			
			//No views have been made yet for Home (admin, faculty, and guest)
			if(Auth::User()->type == 'admin')	//uses the table attribute 'type' to check if admin or faculty
				return redirect()->intended('adminHome');
			else
				return view('iteach.dashboard.facultyhome');
			
		else
			return view('iteach.dashboard.guest-home');

	}

}
