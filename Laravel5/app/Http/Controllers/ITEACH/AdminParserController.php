<?php namespace App\Http\Controllers\ITEACH;

use App\Http\Controllers\Controller;
use Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

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
		
		$i = 0;

		$flag = 0;
		$tok = strtok($contents,",");
		
		while($tok !== false){		

			switch($flag){				//this switch is for controlling the distribution of data in tokenizing the line
				case 0:
					$faculty[$i] = $tok;
					$flag = 1;
					break;
				case 1:
					$course_num[$i] = $tok;
					$flag = 2;
					break;
				case 2:
					$section[$i] = $tok;
					$flag = 3;
					break;
				case 3:
					$time[$i] = $tok;
					$flag = 4;
					break;
				case 4:
					$day[$i] = $tok;
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
					$splitted = preg_split('#\s+#', $tok, null, PREG_SPLIT_NO_EMPTY);	//this just splits the 8th case where unit and faculty was parsed as one word
					$units[$i] = $splitted[0];
					if(count($splitted)!=1){
						$i++;
						$faculty[$i] = $splitted[1];
						$flag = 1;
					}
					break;
			}
			$tok = strtok(",");
		}
			

		$data['faculty'] = $faculty ; 		//associative array of form "faculty" => [bautista,pabico]
		$data['course_num'] = $course_num ;
		$data['time'] = $time;
		$data['day'] = $day;
		$data['room'] = $room;
		$data['slots'] = $slots;
		$data['units'] = $units;
		
		//$data can now be passed on to model and be stored in db.

		return view("pages.parse",$data);		//add a second parameter here to pass the data to the view.
	}

}
