<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SectionTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('sections')->delete();
		DB::table('sections')->insert(array(
			['type'=>'Lecture',
			'courseNum'=>'CMSC 2',
			'sectionNum'=>'E',
			'startTime'=>'1:00',
			'endTime'=>'2:00',
			'day'=>'W/F',
			'roomNum'=>'ICS MH',
			'employeeId'=>'111',
			'classSize'=>'97',
			'teachingUnits'=>3.0],
			['type'=>'Lab',
			'courseNum'=>'CMSC 2',
			'sectionNum'=>'E-1L',
			'startTime'=>'10:00',
			'endTime'=>'1:00',
			'day'=>'T',
			'roomNum'=>'PC LAB 2',
			'employeeId'=>'111',
			'classSize'=>'14',
			'teachingUnits'=>1.5],
			['type'=>'Lab',
			'courseNum'=>'CMSC 2',
			'sectionNum'=>'E-2L',
			'startTime'=>'4:00',
			'endTime'=>'7:00',
			'day'=>'T',
			'roomNum'=>'PC LAB 2',
			'employeeId'=>'111',
			'classSize'=>'22',
			'teachingUnits'=>1.5],
			['type'=>'Lab',
			'courseNum'=>'CMSC 2',
			'sectionNum'=>'E-3L',
			'startTime'=>'10:00',
			'endTime'=>'1:00',
			'day'=>'W',
			'roomNum'=>'PC LAB 2',
			'employeeId'=>'111',
			'classSize'=>'22',
			'teachingUnits'=>1.5],
			['type'=>'Lab',
			'courseNum'=>'CMSC 2',
			'sectionNum'=>'E-4L',
			'startTime'=>'10:00',
			'endTime'=>'1:00',
			'day'=>'TH',
			'roomNum'=>'PC LAB 2',
			'employeeId'=>'111',
			'classSize'=>'23',
			'teachingUnits'=>1.5],
			['type'=>'Lecture',
			'courseNum'=>'CMSC 11',
			'sectionNum'=>'T',
			'startTime'=>'9:00',
			'endTime'=>'10:00',
			'day'=>'T/TH',
			'roomNum'=>'ICS MH',
			'employeeId'=>'111',
			'classSize'=>'92',
			'teachingUnits'=>3.0],
			['type'=>'Lab',
			'courseNum'=>'CMSC 11',
			'sectionNum'=>'T-1L',
			'startTime'=>'10:00',
			'endTime'=>'1:00',
			'day'=>'T',
			'roomNum'=>'PC LAB 3',
			'employeeId'=>'111',
			'classSize'=>'16',
			'teachingUnits'=>1.5],
			['type'=>'Lab',
			'courseNum'=>'CMSC 11',
			'sectionNum'=>'T-2L',
			'startTime'=>'4:00',
			'endTime'=>'7:00',
			'day'=>'T',
			'roomNum'=>'PC LAB 3',
			'employeeId'=>'111',
			'classSize'=>'22',
			'teachingUnits'=>1.5],
			['type'=>'Lecture',
			'courseNum'=>'CMSC 11',
			'sectionNum'=>'U',
			'startTime'=>'10:00',
			'endTime'=>'11:00',
			'day'=>'T/TH',
			'roomNum'=>'ICS MH',
			'employeeId'=>'111',
			'classSize'=>'107',
			'teachingUnits'=>3.0],
			['type'=>'Lab',
			'courseNum'=>'CMSC 11',
			'sectionNum'=>'U-1L',
			'startTime'=>'1:00',
			'endTime'=>'4:00',
			'day'=>'T',
			'roomNum'=>'PC LAB 3',
			'employeeId'=>'111',
			'classSize'=>'20',
			'teachingUnits'=>1.5],
			['type'=>'Lab',
			'courseNum'=>'CMSC 11',
			'sectionNum'=>'U-2L',
			'startTime'=>'10:00',
			'endTime'=>'1:00',
			'day'=>'W',
			'roomNum'=>'PC LAB 3',
			'employeeId'=>'111',
			'classSize'=>'22',
			'teachingUnits'=>1.5],

			['type'=>'Lecture',
			'courseNum'=>'CMSC 21',
			'sectionNum'=>'ST',
			'startTime'=>'8:00',
			'endTime'=>'9:00',
			'day'=>'T/TH',
			'roomNum'=>'ICS MH',
			'employeeId'=>'111',
			'classSize'=>'111',
			'teachingUnits'=>3.0],
			['type'=>'Lab',
			'courseNum'=>'CMSC 21',
			'sectionNum'=>'ST-1L',
			'startTime'=>'1:00',
			'endTime'=>'4:00',
			'day'=>'T',
			'roomNum'=>'PC LAB 4',
			'employeeId'=>'111',
			'classSize'=>'16',
			'teachingUnits'=>1.5],
			['type'=>'Lab',
			'courseNum'=>'CMSC 21',
			'sectionNum'=>'ST-2L',
			'startTime'=>'1:00',
			'endTime'=>'4:00',
			'day'=>'W',
			'roomNum'=>'PC LAB 2',
			'employeeId'=>'111',
			'classSize'=>'22',
			'teachingUnits'=>1.5],
			
			['type'=>'Lecture',
			'courseNum'=>'CMSC 141',
			'sectionNum'=>'D',
			'startTime'=>'12:00',
			'endTime'=>'1:00',
			'day'=>'W/F',
			'roomNum'=>'ICS MH',
			'employeeId'=>'111',
			'classSize'=>'141',
			'teachingUnits'=>3.0],
			['type'=>'Lab',
			'courseNum'=>'CMSC 141',
			'sectionNum'=>'D-1L',
			'startTime'=>'1:00',
			'endTime'=>'4:00',
			'day'=>'M',
			'roomNum'=>'PC LAB 8',
			'employeeId'=>'111',
			'classSize'=>'20',
			'teachingUnits'=>1.5],
			['type'=>'Lab',
			'courseNum'=>'CMSC 141',
			'sectionNum'=>'D-2L',
			'startTime'=>'1:00',
			'endTime'=>'4:00',
			'day'=>'T',
			'roomNum'=>'PC LAB 8',
			'employeeId'=>'111',
			'classSize'=>'22',
			'teachingUnits'=>1.5],

			['type'=>'Sect',
			'courseNum'=>'CMSC 200',
			'sectionNum'=>'AR1',
			'startTime'=>'TBA',
			'endTime'=>'TBA',
			'day'=>'M',
			'roomNum'=>'TBA',
			'employeeId'=>'111',
			'classSize'=>'1',
			'teachingUnits'=>0.0],
			['type'=>'Sect',
			'courseNum'=>'CMSC 200',
			'sectionNum'=>'AR2',
			'startTime'=>'TBA',
			'endTime'=>'TBA',
			'day'=>'M',
			'roomNum'=>'TBA',
			'employeeId'=>'111',
			'classSize'=>'20',
			'teachingUnits'=>0.0],

			['type'=>'Sect',
			'courseNum'=>'CMSC 215',
			'sectionNum'=>'Y',
			'startTime'=>'4:00',
			'endTime'=>'7:00',
			'day'=>'T',
			'roomNum'=>'ICS LH 3',
			'employeeId'=>'111',
			'classSize'=>'19',
			'teachingUnits'=>4.5],
			['type'=>'Sect',
			'courseNum'=>'CMSC 227',
			'sectionNum'=>'WX',
			'startTime'=>'1:00',
			'endTime'=>'4:00',
			'day'=>'T',
			'roomNum'=>'ICS GS Room',
			'employeeId'=>'111',
			'classSize'=>'13',
			'teachingUnits'=>4.5],

			/*['type'=>'Lecture',
			'courseNum'=>'CMSC 210',
			'sectionNum'=>'EF',
			'startTime'=>'2:00',
			'endTime'=>'4:00',
			'day'=>'M',
			'roomNum'=>'ICS GS Room',
			'employeeId'=>'111',
			'classSize'=>'13',
			'teachingUnits'=>3.0],
			['type'=>'Lab',
			'courseNum'=>'CMSC 210',
			'sectionNum'=>'EF-1L',
			'startTime'=>'4:00',
			'endTime'=>'7:00',
			'day'=>'M',
			'roomNum'=>'PC LAB 6',
			'employeeId'=>'111',
			'classSize'=>'13',
			'teachingUnits'=>2.25],*/
		
			['type'=>'Lecture',
			'courseNum'=>'CMSC 210',
			'sectionNum'=>'EF',
			'startTime'=>'2:00',
			'endTime'=>'4:00',
			'day'=>'F',
			'roomNum'=>'ICS GS Room',
			'employeeId'=>'111',
			'classSize'=>'13',
			'teachingUnits'=>3.0],
			['type'=>'Lab',
			'courseNum'=>'CMSC 210',
			'sectionNum'=>'EF-1L',
			'startTime'=>'4:00',
			'endTime'=>'7:00',
			'day'=>'F',
			'roomNum'=>'PC LAB 1',
			'employeeId'=>'111',
			'classSize'=>'13',
			'teachingUnits'=>2.25],

			['type'=>'Sect',
			'courseNum'=>'CMSC 400',
			'sectionNum'=>'AR1',
			'startTime'=>'TBA',
			'endTime'=>'TBA',
			'day'=>'TBA',
			'roomNum'=>'TBA',
			'employeeId'=>'111',
			'classSize'=>'3',
			'teachingUnits'=>0.0]

		));
	}
}
