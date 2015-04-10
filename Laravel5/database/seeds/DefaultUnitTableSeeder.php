<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		DB::table('users')->insert(array(
			['type'=>'Lecture',
			'classification'=>'Undergraduate',
			'unitValue'=>3.0],
			['type'=>'Lab',
			'classification'=>'Undergraduate',
			'unitValue'=>1.5],
			['type'=>'Sect',
			'classification'=>'Undergraduate',
			'unitValue'=>3.0],
			['type'=>'Sect',
			'classification'=>'UndergraduateSP',
			'unitValue'=>3.0],
			['type'=>'Sect',
			'classification'=>'UndergraduateThesis',
			'unitValue'=>0.0],
			['type'=>'Lecture',
			'classification'=>'Graduate',
			'unitValue'=>3.0],
			['type'=>'Lab',
			'classification'=>'Graduate',
			'unitValue'=>2.25],
			['type'=>'Sect',
			'classification'=>'Graduate',
			'unitValue'=>4.5],
			['type'=>'Sect',
			'classification'=>'GraduateThesis',
			'unitValue'=>0.0],

		));
	}
}
