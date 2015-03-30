<?php namespace App\Http\Controllers\ITEACH;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminParserController extends Controller {

	public function index() 
	{
		return view("pages.upload");
	}

	public function parse() 
	{	
		$line['test'] = file('csv/cot.csv');			//read the whole .csv
		$i = 0;

		foreach($line['test'] as $l){	//The loop that parses. This tokenizes the strings with , as the delimiter.

			$data[$i]['line'] = $l;		//line read is being stored here.
			$flag = 0;
			$tok = strtok($data[$i]['line'],",");
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
						$units[$i] = $tok;
						break;
				}

				$tok = strtok(",");
			}

			
			$i++;
		}

		for($i=0;$i<count($course_num);$i++){	//for checking whether the data was passed correctly.
			echo $faculty[$i];echo ' | '; 
			echo $course_num[$i];echo ' | ';
			echo $section[$i];echo ' | ';
			echo $time[$i];echo ' | ';
			echo $day [$i];echo ' | ';
			echo $room [$i];echo ' | ';
			echo $slots [$i];echo ' | ';
			echo $units [$i];echo ' | ';
			echo '<br/>';
		}

		return view("pages.parse");		//add a second parameter here to pass the data to the view.
	}

}
