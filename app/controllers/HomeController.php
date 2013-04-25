<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showScore()
	{
		$row = DB::table('result')->first();
		$row = unserialize($row->row);

		$games = [
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'IF Örnen'],
			['Hemmalag' => 'Jössefors IK', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'Bäckalunds IF', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'Lysviks IF'],
			['Hemmalag' => 'Gettjärns IF', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'Gunnarskog/Bortan IK'],
			['Hemmalag' => 'Torsby IF U', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'Rännbergs IK'],
			['Hemmalag' => 'Åmotfors IF/IFK Ås', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'IF Örnen', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'Jössefors IK'],
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'Bäckalunds IF'],
			['Hemmalag' => 'Lysviks IF', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'Gettjärns IF'],
			['Hemmalag' => 'Gunnarskog/Bortan IK', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'Torsby IF U'],
			['Hemmalag' => 'Rännbergs IK', 'Bortalag' => 'Älgå SK'],
			['Hemmalag' => 'Älgå SK', 'Bortalag' => 'Åmotfors IF/IFK Ås']
		];
		return View::make('admin')
			->with('games', $games)
			->with('row', $row);
	}

	public function updateRow()
	{
		$data = serialize(Input::get('facit'));
		$update = DB::update('update result set row = ? where id = 2', array($data));
		if ($update) {
			return Redirect::to('/');
		}
	}

	public function admin()
	{
		return 'Admin';
	}

}