<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('CourseTableSeeder');
		$this->call('InstructorTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('RoomTableSeeder');
		$this->call('SectionTableSeeder');
		$this->call('DefaultUnitTableSeeder');
		
	}

}
