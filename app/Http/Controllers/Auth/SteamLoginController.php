<?php

namespace App\Http\Controllers\Auth;

use App\StmUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use kanalumaddela\LaravelSteamLogin\Http\Controllers\AbstractSteamLoginController;
use kanalumaddela\LaravelSteamLogin\SteamUser;

class SteamLoginController extends AbstractSteamLoginController
{
    /**
     * {@inheritdoc}
     */
    
    public function authenticated(Request $request, SteamUser $steamUser)
    {
      $steamUser->getUserInfo();
        dd($steamUser);
    }
}
