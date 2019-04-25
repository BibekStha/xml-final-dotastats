<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    protected $fillable = ['team_id','rating', 'wins', 'losses', 'last_match_time', 'name', 'tag', 'logo_url'];
}
