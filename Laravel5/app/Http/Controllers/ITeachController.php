<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ITeachController extends Controller {

	public function login(){

		$data = [];
		$data += ['type' => 'li'];
		return view('iteach.login', compact('data'));
	}

	public function signup(){

		$data = [];
		$data += ['type' => 'su'];
		return view('iteach.sign-up', compact('data'));
	}

	public function home(){
		return view('iteach.index');
	}

}
