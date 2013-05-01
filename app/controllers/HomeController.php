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

	public function __construct()
	{
		$this->games = Games::getGames();	
	}

	public function showScore()
	{
		$row = DB::table('result')->first();
		$goals = $row->goals;
		$row = unserialize($row->row);

		$games = $this->games;
		return View::make('admin')
			->with('games', $games)
			->with('goals', $goals)
			->with('row', $row);
	}

	public function updateRow()
	{
		$data = Input::get('facit');
		$goals = Input::get('goals');
		$update = DB::update('update result set row = ?, goals = ? where id = 2', array( serialize($data), $goals) );
		if ($update) {

			$competitors = Competitor::all();

			foreach ($competitors as $competitor) {
				
				$row = unserialize($competitor->row);
				$ratt = 0;
				
				for ($i=0; $i < count($data); $i++) { 
					
					if ($data[$i] == $row[$i]) {
					 	
						$ratt = $ratt+1;

					 } //endif
				
				} //endfor

				DB::update('update competitors set ratt = ? where id = ?', array($ratt, $competitor->id));
			
			} //endforeach

		}
		return Redirect::to('/');
	}

	public function updateScore()
	{
	}

	public function admin()
	{
		return 'Admin';
	}

}