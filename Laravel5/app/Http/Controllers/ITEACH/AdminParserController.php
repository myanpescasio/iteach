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
		return view("pages.upload");
	}

	public function upload_csv(){
		 
		$file = Request::file('filefield');							//get the data with name filefield in the form submitted
		$extension = $file->getClientOriginalExtension();			//get the file type extension of the file(e.g. .jpg,.csv)
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
					$section[$i] = $tok;
					$flag = 3;
					break;
				case 3:
					$start_time[$i] = $tok;
					$flag = 4;
					break;
				case 4:
					$end_time[$i] = $tok;
					$flag = 5;
					break;
				case 5:
					$room[$i] = $tok;
					$flag = 6;
					break;
				case 6:
					$slots[$i] = $tok;
					$flag = 7;
					break;
				case 7:
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
			 	//missing addition of courseTitle
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
			 	$addDb->units = $units[$i];
			 	$addDb->roomNum = $room[$i];
			 	$addDb->save();
			 }
			
			 if($course_num[$i] == "Study"){
			 	$addDb = new studyTimeSlot;			//the problem, trying to read from study_time_slot na table eh dapat studytimeslot
			 	$addDb->studyName = $section[$i];
			 	$addDb->startTime = $start_time[$i];
			 	$addDb->endTime = $end_time[$i];
			 	$addDb->day = $day[$i];
			 	$addDb->units = $units[$i];
			 	$addDb->room = $room[$i];
			 	$addDb->save();
			 }
		}


		//$data can now be passed on to model and be stored in db.

		//return view("pages.parse",$data);		//add a second parameter here to pass the data to the view.
	}

}
