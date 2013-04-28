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

		$games = Games::getGames();
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