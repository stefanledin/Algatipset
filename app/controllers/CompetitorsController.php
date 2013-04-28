<?php

class CompetitorsController extends BaseController {

    public function __construct() {
        $this->games = Games::getGames();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $competitors = Competitor::all();

        return View::make('competitors.index')
            ->with('competitors', $competitors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('competitors.create')->with('games', $this->games);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $competitor = new Competitor;
        $competitor->row = Input::get('row');
        $competitor->name = Input::get('name');
        $competitor->phone = Input::get('phone');
        $competitor->sponsoring = Input::get('sponsoring');
        $competitor->goals = Input::get('goals');
        $competitor->save();

        return Redirect::to('competitors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $competitor = Competitor::find($id);
        $competitor->row = unserialize($competitor->row);
        return View::make('competitors.edit')
            ->with('competitor', $competitor)
            ->with('games', $this->games);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $competitor = Competitor::find($id);
        $competitor->row = serialize(Input::get('row'));
        $competitor->name = Input::get('name');
        $competitor->phone = Input::get('phone');
        $competitor->sponsoring = Input::get('sponsoring');
        $competitor->goals = Input::get('goals');
        $competitor->save();
        return Redirect::to('competitors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}