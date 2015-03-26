<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ViewController extends Controller {

	function viewAll(){

		return view('iteach.dashboard.viewAll');

	}
	function viewCourse(){

		return view('iteach.dashboard.viewCourse');

	}
	function viewInstructor(){

		return view('iteach.dashboard.viewInstructor');

	}
	function viewRoom(){

		return view('iteach.dashboard.viewRoom');

	}
}
