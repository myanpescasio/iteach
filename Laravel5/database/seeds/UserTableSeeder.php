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
			'username'=>'Gani',
			'employeeId'=>'0987654321',
			'password'=> bcrypt('masterGani')],
			['type'=>'faculty',
			'username'=>'CJ',
			'employeeId'=>'1234567890',
			'password'=> bcrypt('masterCJ')],
			['type'=>'admin',
			'username'=>'kepbautista',
			'employeeId'=>'005',
			'password'=> bcrypt('kepbautista')],
			['type'=>'faculty',
			'username'=>'mbbderobles',
			'employeeId'=>'040',
			'password'=> bcrypt('mbbderobles')],

		));
	}
}
