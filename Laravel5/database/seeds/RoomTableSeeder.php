<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoomTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('rooms')->delete();
		DB::table('rooms')->insert(array(
			['roomNum'=>'ICS Conf Room',
			'capacity'=>'20'],
			['roomNum'=>'ICS GS Room',
			'capacity'=>'15'],
			['roomNum'=>'ICS MH',
			'capacity'=>'120'],
			['roomNum'=>'ICS LH 3',
			'capacity'=>'100'],
			['roomNum'=>'ICS LH 4',
			'capacity'=>'22'],
			['roomNum'=>'PC LAB 1',
			'capacity'=>'15'],
			['roomNum'=>'PC LAB 2',
			'capacity'=>'22'],
			['roomNum'=>'PC LAB 3',
			'capacity'=>'22'],
			['roomNum'=>'PC LAB 4',
			'capacity'=>'15'],
			['roomNum'=>'PC LAB 5',
			'capacity'=>'22'],
			['roomNum'=>'PC LAB 6',
			'capacity'=>'22'],
			['roomNum'=>'PC LAB 7',
			'capacity'=>'15'],
			['roomNum'=>'PC LAB 8',
			'capacity'=>'22'],
			['roomNum'=>'PC LAB 9',
			'capacity'=>'22'],
		));
	}
}
