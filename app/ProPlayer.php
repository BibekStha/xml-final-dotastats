<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProPlayer extends Model
{
    //
  protected $fillable = ['account_id', 'steamid', 'avatar', 'avatarmedium', 'avatarfull', 'profileurl',
      'personaname', 'last_login', 'full_history_time', 'cheese', 'fh_unavailable', 'loccountrycode',
      'last_match_time', 'plus', 'name', 'country_code', 'fantasy_role', 'team_id', 'team_name', 'team_tag',
      'is_locked', 'is_pro', 'locked_until'];

  public function player() {
    return $this->hasOne('App\Player', 'account_id', 'account_id');
  }
}
