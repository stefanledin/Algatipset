<?php

class UsersSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = [
			[
				'name' => 'Stefan',
				'email' => 'stefan.ledin@gmail.com',
				'username' => 'stefan.ledin@gmail.com',
				'password' => Hash::make('hej')]
		];
		DB::table('users')->insert($users);
	}

}