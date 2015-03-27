<?php namespace App\Http\Controllers\ITEACH;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class ViewController extends Controller {

	function viewAll(){
		if(Auth::check())	//If authentication is done, user is not guest
			
			//No views have been made yet for Home (admin, faculty, and guest)
			if(Auth::User()->type == 'admin')	//uses the table attribute 'type' to check if admin or faculty
				return "logged in as admin";
			else
				return "logged in as faculty";
			
		else
			return view('iteach.dashboard.viewAll');

		

	}
	function viewCourse(){
		if(Auth::check())	//If authentication is done, user is not guest
			
			//No views have been made yet for Home (admin, faculty, and guest)
			if(Auth::User()->type == 'admin')	//uses the table attribute 'type' to check if admin or faculty
				return "logged in as admin";
			else
				return "logged in as faculty";
			
		else{
			$courses=["CMSC 125", "CMSC 132", "CMSC 170"];
			return view('iteach.dashboard.viewCourse', compact('courses'));
		}

	}
	function viewInstructor(){
		if(Auth::check())	//If authentication is done, user is not guest
			
			//No views have been made yet for Home (admin, faculty, and guest)
			if(Auth::User()->type == 'admin')	//uses the table attribute 'type' to check if admin or faculty
				return "logged in as admin";
			else
				return "logged in as faculty";
			
		else
			return view('iteach.dashboard.viewInstructor');

	}
	function viewRoom(){

		if(Auth::check())	//If authentication is done, user is not guest
			
			//No views have been made yet for Home (admin, faculty, and guest)
			if(Auth::User()->type == 'admin')	//uses the table attribute 'type' to check if admin or faculty
				return "logged in as admin";
			else
				return "logged in as faculty";
			
		else
			return view('iteach.dashboard.viewRoom');

	}
}
