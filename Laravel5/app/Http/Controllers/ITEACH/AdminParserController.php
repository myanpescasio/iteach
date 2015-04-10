<?php namespace App\Http\Controllers\ITEACH;

use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use DB;
//use App\room;
use App\course;
use App\section;
//use App\courseTimeSlot;
//use App\studyTimeSlot;

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
		echo $contents;
		//$tok = new StdClass;
		$i = 0;

		$flag = 0;
		$tok = strtok($contents,",");
		echo $tok;
		while($tok !== false){		

			switch($flag){				//this switch is for controlling the distribution of data in tokenizing the line
				case 0:
					$day[$i] = $tok;
					$flag = 1;
					break;
				case 1:
					$type[$i] = $tok;
					$flag=2;
					break;
				case 2:
					$course_num[$i] = $tok;
					$flag = 3;
					break;
				case 3:
					$section[$i] = $tok;
					$flag = 4;
					break;
				case 4:
					$start_time[$i] = $tok;
					$flag = 5;
					break;
				case 5:
					$end_time[$i] = $tok;
					$flag = 6;
					break;
				case 6:
					$room[$i] = $tok;
					$flag = 7;
					break;
				case 7:
					$faculty[$i] = $tok;
					$flag = 8;
					break;
				case 8:
					$class_size[$i] = $tok;
					$flag = 9;
					break;
				case 9:
					$splitted = preg_split('#\s+#',$tok,null,PREG_SPLIT_NO_EMPTY);
					$class_size[$i] = $splitted[0];
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
			 echo $section[$i];
			 $results = section::compositeKey($course_num[$i], $section[$i])->get();
			 if(COUNT($results) == 0){
				 $addDb = new section;
				 $addDb->type = $type[$i];
				 $addDb->courseNum = $course_num[$i];
				 $addDb->sectionNum = $section[$i];
				 $addDB->day = $day[$i];
				 $addDb->startTime = $start_time[$i];
			 	 $addDb->endTime = $end_time[$i];
				 $addDb->roomNum = $room[$i];
				 $addDb->employeeNum = $faculty[$i];
				 $addDb->classSize = $class_size[$i];
					if($type[$i] == "Lecture"){
						$class = course::where('courseNum','like',$course_num[$i])->get();
						if($class->classification == 'Undergraduate')
							$addDb->teachingUnits = 3.0;	//insert computation
						else if($class == 'Graduate')
							$addDb->teachingUnits = 3.0;
					}
					else if($type[$i] == "Lab"){
						$class = course::where('courseNum','like',$course_num[$i])->get();
						if($class->classification == 'Undergraduate')
							$addDb->teachingUnits = 1.5;
						else if($class == 'Graduate')
							$addDb->teachingUnits = 2.25;

					}
					else if($type[$i] == "Sect"){
						$class = course::where('courseNum','like',$course_num[$i])->get();
						if($class->classification == 'UndergraduateSP')
							$addDb->teachingUnits = 3.0;	//insert computation
						else if($class == 'Graduate')
							$addDb->teachingUnits = 4.5;
						else if($class == 'UndergraduateThesis' || $class == 'GraduateThesis')
							$addDb->teachingUnits = 0.0;						

					}
				 $addDb->save();
			 }
	
		}

		//$data can now be passed on to model and be stored in db.
		$data['type'] = $type;
		$data['course_num'] = $course_num;
		$data['section'] = $section;
		$data['day'] = $day;
		$data['start_time'] = $start_time;
		$data['end_time'] = $end_time;
		$data['room'] = $room;
		$data['faculty'] = $faculty;
		$data['class_size'] = $class_size;
		//$data['units'] = $units;

		return view("iteach.admin.successfulUpload",$data);		//add a second parameter here to pass the data to the view.
	}

}
