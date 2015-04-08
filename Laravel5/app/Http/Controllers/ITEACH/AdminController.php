<?php namespace App\Http\Controllers\ITEACH;

/*****************************************************************************
	This controller is for functionalities belonging to the administrator side.
	This allows the approval of sent requests by the user and whatnot.
******************************************************************************/

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Auth;

class AdminController extends Controller {
	public function index()
	{
		return view('iteach.admin.adminHome');
	}

	public function addSwapDissolveSection() 
	{
		return view('iteach.admin.addSwapDissolveSection');
	}

	public function swapSection() 
	{
		return view('iteach.admin.swapSection');
	}

	public function addSection() 
	{
		return view('iteach.admin.addSection');
	}

	public function addCourse() 
	{
		return view('iteach.admin.addCourse');
	}

	public function dissolveSection() 
	{
		return view('iteach.admin.dissolveSection');
	}

	public function viewAll()
	{
		return view('iteach.admin.viewAll');
	}

	public function viewCourse()
	{
		return view('iteach.admin.viewCourse');
	}

	public function viewRoom()
	{
		return view('iteach.admin.viewRoom');
	}

	public function viewInstructor()
	{
		return view('iteach.admin.viewInstructor');
	}

	public function editMinorDetailsFaculty()
	{
		return view('iteach.admin.editMinorDetailsFaculty');
	}

	public function editMinorDetailsRoom()
	{
		return view('iteach.admin.editMinorDetailsRoom');
	}

	public function viewSystemLog()
	{
		// Example purposes only
		// This should be an SQL query obtaining the system logs
		$sampleLog = array
					 (
					 	array("0001", "Nacheness ni Prof A si Prof B para sa Room C", "1428192045"),
					 	array("0010", "Inaccept with arms wide open ni Admin A si new Prof D", "1428192091"),
					 	array("0011", "Nireject ni Admin B si Prof G for personal reasons", "1428192124")
					 );

		return view('iteach.admin.viewSystemLog', compact('sampleLog'));
	}

}
