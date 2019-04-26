<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
      // find user by steam account id
      $user = User::where('steamId', $steamUser->steamId)->first();
      // if the user doesn't exist, create them
      if (!$user) {
          $steamUser->getUserInfo(); // retrieve and set user info pulled from steam
          // exit();

          $user = User::create(['steamId' => $steamUser->steamId,
              'steamId2' => $steamUser->steamId2,
              'steamId3' => $steamUser->steamId3,
              'accountId' => $steamUser->accountId,
              'accountUrl' => $steamUser->accountUrl,
              'name' => $steamUser->name,
              'realName' => $steamUser->realName,
              'profileUrl' => $steamUser->profileUrl,
              'privacyState' => $steamUser->privacyState,
              'visibilityState' => $steamUser->visibilityState,
              'isOnline' => $steamUser->isOnline,
              'onlineState' => $steamUser->onlineState,
              'avatarSmall' => $steamUser->avatarSmall,
              'avatarIcon' => $steamUser->avatarIcon,
              'avatarMedium' => $steamUser->avatarMedium,
              'avatarLarge' => $steamUser->avatarLarge,
              'avatarFull' => $steamUser->avatarFull,
              'avatar' => $steamUser->avatar,
              'joined' => $steamUser->joined
          ]);
      }

      // login the user using the Auth facade
      // the extended Abstract controller redirects the user back to the page they were on since there was no return
      Auth::login($user);
      // var_dump(Auth::user()->steamId);
      // exit();

    }
}
