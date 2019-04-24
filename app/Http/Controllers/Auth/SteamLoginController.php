<?php

namespace App\Http\Controllers\Auth;

use App\StmUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use kanalumaddela\LaravelSteamLogin\Http\Controllers\AbstractSteamLoginController;
use kanalumaddela\LaravelSteamLogin\Http\Controllers\SteamLoginHandlerController;
use kanalumaddela\LaravelSteamLogin\SteamUser;

class SteamLoginController extends SteamLoginHandlerController
{
    /**
     * {@inheritdoc}
     */
    
    public function authenticate(Request $request, SteamUser $steamUser)
    {
      // find user by steam account id
      $user = StmUser::where('steam_account_id', $steamUser->accountId);

      // if the user doesn't exist, create them
      if (!$user) {
          $steamUser->getUserInfo(); // retrieve and set user info pulled from steam

          $user = User::create([
              'name' => $steamUser->name, // personaname
              'steam_account_id' => $steamUser->accountId,
          ]);
      }

      // login the user using the Auth facade
      // the extended Abstract controller redirects the user back to the page they were on since there was no return
      Auth::login($user);
    }
}
