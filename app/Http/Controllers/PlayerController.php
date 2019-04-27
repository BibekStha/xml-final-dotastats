<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SimpleOpenDota\odota_api;
use App\ProPlayer;
use App\Player;
use App\Hero;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('players.create');
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
      $od = new odota_api();

      $proPlayers = ProPlayer::all();

      foreach($proPlayers as $proPlayer){
        
        $p = Player::where('account_id', $proPlayer->account_id)->first();

        if(!$p){
          $player = $od->player($proPlayer->account_id);
          $p = Player::create([
          'tracked_until' => $player['tracked_until'],
          'solo_competitive_rank' => $player['solo_competitive_rank'],
          'account_id' => $player['profile']['account_id'],
          'personaname' => $player['profile']['personaname'],
          'name' => $player['profile']['name'],
          'plus' => $player['profile']['plus'],
          'cheese' => $player['profile']['cheese'],
          'steamid' => $player['profile']['steamid'],
          'avatar' => $player['profile']['avatar'],
          'avatarmedium' => $player['profile']['avatarmedium'],
          'avatarfull' => $player['profile']['avatarfull'],
          'profileurl' => $player['profile']['profileurl'],
          'last_login' => $player['profile']['last_login'],
          'loccountrycode' => $player['profile']['loccountrycode'],
          'is_contributor' => $player['profile']['is_contributor'],
          'mmr_estimate' => $player['mmr_estimate']['estimate'],
          'rank_tier' => $player['rank_tier'],
          'leaderboard_rank' => $player['leaderboard_rank'],
          'competitive_rank' => $player['competitive_rank']
          ]);
        }
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($account_id)
    {
      $od = new odota_api();
      $player = $od->player($account_id);
      $proplayer = ProPlayer::where('account_id', $account_id)->first();
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

      return view('players.show')
        ->with('player', $player)
        ->with('winloss', $winloss)
        ->with('player_heroes', $player_heroes)
        ->with('proplayer', $proplayer);
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
