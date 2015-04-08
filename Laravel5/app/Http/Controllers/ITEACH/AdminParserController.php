<?php namespace App\Http\Controllers\ITEACH;

use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use DB;
use App\room;
use App\course;
use App\section;
use App\courseTimeSlot;
use App\studyTimeSlot;

class AdminParserController extends Controller {

	public function index() 
	{
		return view('iteach.admin.uploadCSVFile');
	}

	public function processCSV(){
		 
		$file = Request::file('inputFile');							//get the data with name filefield in the form submitted
		$extension = $file->getClientOriginalName();			//get the file type extension of the file(e.g. .jpg,.csv)
		$fileName = $file->getFilename().'.'.$extension;			//create string with the name of the file plus its extension
		Storage::disk('local')->put( $fileName, File::get($file));	//store into storage/app
		$contents = Storage::get($fileName);						//read the contents of the uploaded file	
		//echo $contents;
		$i = 0;

		$flag = 0;
		$tok = strtok($contents,",");
		
		while($tok !== false){		

			switch($flag){				//this switch is for controlling the distribution of data in tokenizing the line
				case 0:
					$day[$i] = $tok;
					$flag = 1;
					break;
				case 1:
					$course_num[$i] = $tok;
					$flag=2;
					break;
				case 2:
					$course_title[$i] = $tok;
					$flag = 3;
					break;
				case 3:
					$section[$i] = $tok;
					$flag = 4;
					break;
				case 4:
					$type[$i] = $tok;
					$flag = 5;
					break;
				case 5:
					$start_time[$i] = $tok;
					$flag = 6;
					break;
				case 6:
					$end_time[$i] = $tok;
					$flag = 7;
					break;
				case 7:
					$room[$i] = $tok;
					$flag = 8;
					break;
				case 8:
					$slots[$i] = $tok;
					$flag = 9;
					break;
				case 9:
					$ini_instructor[$i] = $tok;
					$flag = 10;
					break;
				case 10:
					$splitted = preg_split('#\s+#',$tok,null,PREG_SPLIT_NO_EMPTY);
					$units[$i] = $splitted[0];
					if(count($splitted)!=1){
						$i++;
						$day[$i] = $splitted[1];
						$flag = 1;
					}
					break;
			}
			$tok = strtok(",");
		}
			
		for($i=1;$i<count($course_num);$i++){
			
			$results = room::where('roomNum','like',$room[$i])->get();
			 if(COUNT($results) == 0){
			 	$addDb = new room;
			 	$addDb->roomNum = $room[$i];
			 	$addDb->capacity = $slots[$i];
		 		$addDb->save();
			  }	

			 $results = course::where('courseNum','like',$course_num[$i])->get();
			 if(COUNT($results) == 0){
			 	$addDb = new course;
			 	$addDb->courseNum = $course_num[$i];
			 	$addDb->courseTitle = $course_title[$i];
			 	$addDb->save();
			 }	

			 
			 $results = courseTimeSlot::where('sectionNum','like',$section[$i])->get();
			 if(COUNT($results) == 0){
			 	$addDb = new courseTimeSlot;
			 	$addDb->sectionNum = $section[$i];
			 	$addDb->startTime = $start_time[$i];
			 	$addDb->endTime = $end_time[$i];
			 	$addDb->day = $day[$i];
			 	$addDb->save();
			 }
			 $results = section::where('sectionNum','like',$section[$i])->get();
			 if(COUNT($results) == 0){
				 $addDb = new section;
				 $addDb->sectionNum = $section[$i];
				 $addDb->courseNum = $course_num[$i];
				 $addDb->type = $type[$i];
				 $addDb->employeeNum = $ini_instructor[$i];
				 $addDb->units = $units[$i];
				 $addDb->roomNum = $room[$i];
				 $addDb->save();
			 }
			
			/*$results = studyTimeSlot::where('studyName','like',$course_num[$i]);
		 	if(COUNT($results) == 0){
			 	if($studyOrTeach[$i] == "Study"){
			 		if($results->studyName == $section[$i]){
			 			if($results->startTime!=$start_time[$i] || $results->endTime!=$endTime[$i]){
						 	$addDb = new studyTimeSlot;			
						 	$addDb->studyName = $section[$i];
						 	$addDb->startTime = $start_time[$i];
						 	$addDb->endTime = $end_time[$i];
						 	$addDb->day = $day[$i];
						 	$addDb->units = $units[$i];
						 	$addDb->room = $room[$i];
						 	$addDb->save();
					 	}
					 }
				 }
			}*/
	
		}


		//$data can now be passed on to model and be stored in db.
		$data['day'] = $day;
		$data['course_num'] = $course_num;
		$data['course_title'] = $course_title;
		$data['section'] = $section;
		$data['type'] = $type;
		$data['start_time'] = $start_time;
		$data['end_time'] = $end_time;
		$data['room'] = $room;
		$data['slots'] = $slots;
		$data['ini_instructor'] = $ini_instructor;
		$data['units'] = $units;

		return view("iteach.admin.successfulUpload",$data);		//add a second parameter here to pass the data to the view.
	}

}
