<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SimpleOpenDota\odota_api;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
      $teams = Team::orderBy('rating', 'desc')->paginate(10);

      return view('teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $od = new odota_api();
      $teams = $od->teams();
      $num=0;
      foreach($teams as $team) {
        $t = Team::where('team_id', $team['team_id'])->first();

        if($t){
          $num++;
          echo($num);

        } else {
          $t = Team::create([
            'team_id' => $team['team_id'],
            'rating' => $team['rating'],
            'wins' => $team['wins'],
            'losses' => $team['losses'],
            'last_match_time' => Date("Y-m-d H:i", $team['last_match_time']),
            'name' => $team['name'],
            'tag' => $team['tag'],
            'logo_url' => $team['logo_url']
          ]);
        }
      }
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
      $teams = $od->teams();
      $num=0;
      foreach($teams as $team) {
        $t = Team::where('team_id', $team['team_id'])->first();

        if($t){
          $num++;
          echo($num);

        } else {
          $t = Team::create([
            'team_id' => $team['team_id'],
            'rating' => $team['rating'],
            'wins' => $team['wins'],
            'losses' => $team['losses'],
            'last_match_time' => Date("Y-m-d H:i", $team['last_match_time']),
            'name' => $team['name'],
            'tag' => $team['tag'],
            'logo_url' => $team['logo_url']
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
