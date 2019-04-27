<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SimpleOpenDota\odota_api;
use App\Player;
use App\Hero;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $account_id = Auth::user()->accountId;

        $od = new odota_api();
        $player = $od->player($account_id);

        $winloss = $od->player_winloss($account_id);

        $heroes = $od->player_heroes($account_id);
        $player_heroes = [];
        foreach($heroes as $hero) {
          if($hero['games']){
            $player_heroes[] = $hero['hero_id'];
          }
        }
        sort($player_heroes);

        $player_heroes = Hero::find($player_heroes);
        // $trial = $od->player_recent_matches($account_id);

        // var_dump($player);
        // exit();

        return view('profile.index')
          ->with('player', $player)
          ->with('winloss', $winloss)
          ->with('player_heroes', $player_heroes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
