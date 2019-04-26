<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SimpleOpenDota\odota_api;
use App\ProPlayer;
use App\Player;

class ProPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $od = new odota_api();
      // $pp = ProPlayer::paginate(10);
      // $pp = ProPlayer::with(['player'=> function ($query) {
      //   $query->orderBy('mmr_estimate', 'desc');
      // }])->paginate(10);

      $pp = ProPlayer::join('players as p', 'p.account_id', '=', 'pro_players.account_id')
          ->orderBy('p.mmr_estimate', 'desc')
          ->select('pro_players.*')
          ->paginate(10);

      // foreach($pp as $p){
      //   print_r($od->player($p->account_id)['mmr_estimate']['estimate']);
      // }
      // print_r($pp->player->mmr_estimate);
      // exit();

      return view('proplayers.index', ['pp' => $pp]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proplayers.create');
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
        $proPlayers = $od->pro_players();
        // var_dump($proPlayers[100]);
        // exit();
  
        foreach($proPlayers as $proPlayer) {
          $pp = ProPlayer::where('account_id', $proPlayer['account_id'])->first();
  
          if(!$pp){
            $pp = ProPlayer::create([
            'account_id' => $proPlayer['account_id'],
            'steamid' => $proPlayer['steamid'],
            'avatar' => $proPlayer['avatar'],
            'avatarmedium' => $proPlayer['avatarmedium'],
            'avatarfull' => $proPlayer['avatarfull'],
            'profileurl' => $proPlayer['profileurl'],
            'personaname' => $proPlayer['personaname'],
            'last_login' => $proPlayer['last_login'],
            'full_history_time' => $proPlayer['full_history_time'],
            'cheese' => $proPlayer['cheese'],
            'fh_unavailable' => $proPlayer['fh_unavailable'],
            'loccountrycode' => $proPlayer['loccountrycode'],
            'last_match_time' => $proPlayer['last_match_time'],
            'plus' => $proPlayer['plus'],
            'name' => $proPlayer['name'],
            'country_code' => $proPlayer['country_code'],
            'fantasy_role' => $proPlayer['fantasy_role'],
            'team_id' => $proPlayer['team_id'],
            'team_name' => $proPlayer['team_name'],
            'team_tag' => $proPlayer['team_tag'],
            'is_locked' => $proPlayer['is_locked'],
            'is_pro' => $proPlayer['is_pro'],
            'locked_until' => $proPlayer['locked_until']
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
