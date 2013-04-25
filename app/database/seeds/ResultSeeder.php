<?php

class ResultSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$row = [
			[
			 	'row' => serialize(array(
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-',
			 		'-'
		 		))
			]
		];
		DB::table('result')->insert($row);
	}

}