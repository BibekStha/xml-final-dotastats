<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
  protected $fillable = ['tracked_until', 'solo_competitive_rank', 'account_id', 'personaname', 'name',
      'plus', 'cheese', 'steamid', 'avatar', 'avatarmedium', 'avatarfull', 'profileurl', 'last_login',
      'loccountrycode', 'is_contributor', 'mmr_estimate', 'rank_tier', 'leaderboard_rank',
      'competitive_rank'];

  // public function leaderboard_rank() {
  //   return $this->leaderboard_rank;
  // }
}
