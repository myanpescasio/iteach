<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CourseTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('courses')->delete();
		DB::table('courses')->insert(array(
			['courseNum'=>'CMSC 2',
			'courseTitle'=>'Introduction to the Internet',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'None',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 11',
			'courseTitle'=>'Introduction to Computer Science',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2,S',
			'preReq'=>'MATH 17 or MATH 11',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 21',
			'courseTitle'=>'Fundamentals of Programming',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'CMSC 11',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 22',
			'courseTitle'=>'Object Oriented Programming',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'CMSC 11',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 56',
			'courseTitle'=>'Discrete Mathematical Structures in Computer Science I',
			'classification'=>'Undergraduate',
			'semOffered'=>'2,S',
			'preReq'=>'MATH 17',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 57',
			'courseTitle'=>'Discrete Mathematical Structures in Computer Science II',
			'classification'=>'Undergraduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 56',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 100',
			'courseTitle'=>'Web Programming',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'CMSC 2 and CMSC 22',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 123',
			'courseTitle'=>'Data Structures',
			'classification'=>'Undergraduate',
			'semOffered'=>'2,S',
			'preReq'=>'(CMSC 21 and CMSC 57) or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 124',
			'courseTitle'=>'Design and Implementation of Programming Languages',
			'classification'=>'Undergraduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 123 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 125',
			'courseTitle'=>'Operating Systems',
			'classification'=>'Undergraduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 123 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 127',
			'courseTitle'=>'File Processing and Database Systems',
			'classification'=>'Undergraduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 123 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 128',
			'courseTitle'=>'Introduction to Software Engineering',
			'classification'=>'Undergraduate',
			'semOffered'=>'2',
			'preReq'=>'CMSC 123 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 129',
			'courseTitle'=>'Principles of Compiler Design',
			'classification'=>'Undergraduate',
			'semOffered'=>'2',
			'preReq'=>'(Elective)',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 130',
			'courseTitle'=>'Logic Design and Digital Compiler Circuits',
			'classification'=>'Undergraduate',
			'semOffered'=>'2',
			'preReq'=>'(CMSC 11 and CMSC 57) or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 131',
			'courseTitle'=>'Introduction to Computer Organization and Machine Level Programming',
			'classification'=>'Undergraduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 21 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 132',
			'courseTitle'=>'Computer Architecture',
			'classification'=>'Undergraduate',
			'semOffered'=>'2',
			'preReq'=>'CMSC 131',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 137',
			'courseTitle'=>'Data Communication and Networking',
			'classification'=>'Undergraduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 125',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 141',
			'courseTitle'=>'Automata and Language',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'CMSC 123 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 142',
			'courseTitle'=>'Design and Analysis of Algorithms',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'CMSC 123 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 150',
			'courseTitle'=>'Numerical and Symbolic Compuations',
			'classification'=>'Undergraduate',
			'semOffered'=>'1',
			'preReq'=>'(MATH 26 or MATH 36) and CMSC 21',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 161',
			'courseTitle'=>'Interactive Computer Graphics',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'CMSC 123 or COI (Elective)',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 165',
			'courseTitle'=>'Digital Image Processing',
			'classification'=>'Undergraduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 123 (Elective)',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 170',
			'courseTitle'=>'Introduction to Artificial Intelligence',
			'classification'=>'Undergraduate',
			'semOffered'=>'2',
			'preReq'=>'CMSC 123',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 172',
			'courseTitle'=>'Robot Modeling',
			'classification'=>'Undergraduate',
			'semOffered'=>'2',
			'preReq'=>'CMSC 123 (Elective)',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 180',
			'courseTitle'=>'Introduction to Parallel Computing',
			'classification'=>'Undergraduate',
			'semOffered'=>'2',
			'preReq'=>'CMSC 132 (Elective)',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 190',
			'courseTitle'=>'Special Problem',
			'classification'=>'UndergraduateSP',
			'semOffered'=>'1,2,S',
			'preReq'=>'COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 191',
			'courseTitle'=>'Special Topics',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'COI (Elective)',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 198',
			'courseTitle'=>'Practicum',
			'classification'=>'Undergraduate',
			'semOffered'=>'S',
			'preReq'=>'COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 199',
			'courseTitle'=>'Undegraduate Seminar',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2',
			'preReq'=>'COI',
			'studentUnits'=>'1'],
			['courseNum'=>'CMSC 200',
			'courseTitle'=>'Undergraduate Thesis',
			'classification'=>'UndergraduateThesis',
			'semOffered'=>'1,2,S',
			'preReq'=>'COI',
			'studentUnits'=>'6'],
			['courseNum'=>'CMSC 215',
			'courseTitle'=>'Advanced Computer System',
			'classification'=>'Graduate',
			'semOffered'=>'1',
			'preReq'=>'(CMSC 131 and CMSC 125) or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 227',
			'courseTitle'=>'Advanced Database Systems',
			'classification'=>'Graduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 127 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 241',
			'courseTitle'=>'Formal Languages, Automata Theory and Computations',
			'classification'=>'Graduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 141 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 244',
			'courseTitle'=>'Algorithms and Advanced Data Structures',
			'classification'=>'Graduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 142 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 271',
			'courseTitle'=>'Management Information Systems',
			'classification'=>'Graduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 127 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 300',
			'courseTitle'=>'Masteral Thesis',
			'classification'=>'GraduateThesis',
			'semOffered'=>'1,2,S',
			'preReq'=>'COI',
			'studentUnits'=>'6'],
			['courseNum'=>'CMSC 341',
			'courseTitle'=>'Advanced Theory of Computations',
			'classification'=>'Graduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 241',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 391',
			'courseTitle'=>'Special Topics',
			'classification'=>'Graduate',
			'semOffered'=>'1,2',
			'preReq'=>'COI',
			'studentUnits'=>'3'],
			['courseNum'=>'CMSC 399',
			'courseTitle'=>'Graduate Seminar',
			'classification'=>'Graduate',
			'semOffered'=>'1,2',
			'preReq'=>'COI',
			'studentUnits'=>'1'],
			['courseNum'=>'CMSC 400',
			'courseTitle'=>'Doctoral Dissertation',
			'classification'=>'Doctoral',
			'semOffered'=>'1,2,S',
			'preReq'=>'COI',
			'studentUnits'=>'12'],
			['courseNum'=>'IT 1',
			'courseTitle'=>'Information Technology Literacy',
			'classification'=>'Undergraduate',
			'semOffered'=>'1,2,S',
			'preReq'=>'None',
			'studentUnits'=>'3'],
			['courseNum'=>'IT 210',
			'courseTitle'=>'Web Application Development',
			'classification'=>'Graduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC 100 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'IT 226',
			'courseTitle'=>'Enterprise Information Systems',
			'classification'=>'Graduate',
			'semOffered'=>'1',
			'preReq'=>'CMSC G or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'IT 238',
			'courseTitle'=>'Networking and Client/Server Computing',
			'classification'=>'Graduate',
			'semOffered'=>'1,2',
			'preReq'=>'CMSC 137 or COI',
			'studentUnits'=>'3'],
			['courseNum'=>'IT 295',
			'courseTitle'=>'IT-Based Application Project',
			'classification'=>'Graduate',
			'semOffered'=>'1,2,S',
			'preReq'=>'COI',
			'studentUnits'=>'6'],
			['courseNum'=>'IT 299',
			'courseTitle'=>'Graduate Seminar',
			'classification'=>'Graduate',
			'semOffered'=>'1,2',
			'preReq'=>'COI',
			'studentUnits'=>'1'],
			

		));
	}
}
