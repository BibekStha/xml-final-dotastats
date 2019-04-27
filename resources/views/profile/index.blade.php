@extends('layouts.app')

@section('page_title', $player['profile']['personaname'])


@section('content')

<div id="profile_container" class="d-flex flex-column justify-content-center">
  
  <div class="container text-center profile_avatar">
    {{-- {{ $player['profile']['avatarfull'] }} --}}
      <img class="rounded-circle" src="{{ $player['profile']['avatarfull'] }}" alt="" srcset="">
  </div>

  <div class="container text-center profile_name">
    {{ $player['profile']['personaname'] }}
  </div>

  <div class="container text-center profile_rank mb-4 d-flex flex-row justify-content-center">
    <div class="container d-flex flex-column">
      <span class="profile_subheading">MMR</span>
      <span>{{ $player['mmr_estimate']['estimate'] }}</span>
    </div>
    <div class="container d-flex flex-column">
        <span class="profile_subheading">Leaderboard</span>
      <span>{{ $player['leaderboard_rank'] }}</span>
    </div>
    <div class="container d-flex flex-column">
      <span class="profile_subheading">Rank</span>
      <span>{{ $player['competitive_rank'] }}</span>
    </div>
  </div>

  <div class="container text-center mb-5 profile_win_loss d-flex flex-row justify-content-center">
    <div class="container d-flex flex-column">
      <span class="profile_subheading">Win</span>
      <span>{{ $winloss['win'] }}</span>
    </div>
    <div class="container d-flex flex-column">
        <span class="profile_subheading">Loss</span>
        <span>{{ $winloss['lose'] }}</span>
    </div>
  </div>

  <div class="container">
      <h2 class="text-center player_hero_subheading">Heroes you have played with</h2>
    <div class="container d-flex flex-row flex-wrap player_heroes_container">
      @foreach ($player_heroes as $player_hero)
          <div class="col-2">
            <img class="hero_img" src="https://api.opendota.com{{ $player_hero['img'] }}" alt="" srcset="">
          </div>
      @endforeach
    </div>
  </div>

</div>

@endsection
