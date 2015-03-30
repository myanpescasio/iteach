<?php namespace App\Http\Controllers\ITEACH;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GuestViewController extends Controller {
	public function viewAll()
	{
		return view('iteach.dashboard.viewAll');
	}

	public function viewCourse()
	{
		return view('iteach.dashboard.viewCourse');
	}

	public function viewInstructor()
	{
		return view('iteach.dashboard.viewInstructor');
	}

	public function viewRoom()
	{
		return view('iteach.dashboard.viewRoom');
	}
}
