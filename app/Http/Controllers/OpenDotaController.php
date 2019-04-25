<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SimpleOpenDota\odota_api;
use App\Team;

class OpenDotaController extends Controller
{

  public function allTeams() {
    $od = new odota_api();
    $teams = $od->teams();

    foreach($teams as $team) {
      try {
        $t = Team::where('team_id', $team->team_id);
      } catch(exception $e) {
        $t = null;
      }

      if(!$t){
        var_dump($team->name);
      }
    }
  }
    
}
