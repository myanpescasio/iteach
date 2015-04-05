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
			['type'=>'admin',
			'fname'=>'Isagani',
			'lname'=>'Marquez',
			'username'=>'Gani',
			'employeeId'=>'0987654321',
			'password'=> bcrypt('masterGani')],
			['type'=>'faculty',
			'fname'=>'CJ',
			'lname'=>'Cruz',
			'username'=>'CJ',
			'employeeId'=>'1234567890',
			'password'=> bcrypt('masterCJ')],
			['type'=>'admin',
			'fname'=>'Kristine Elaine',
			'lname'=>'Bautista',
			'username'=>'kepbautista',
			'employeeId'=>'005',
			'password'=> bcrypt('kepbautista')],
			['type'=>'faculty',
			'fname'=>'Marie Betel',
			'lname'=>'De Robles',
			'username'=>'mbbderobles',
			'employeeId'=>'040',
			'password'=> bcrypt('mbbderobles')],

		));
	}
}
