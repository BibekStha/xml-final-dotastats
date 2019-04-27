@extends('layouts.app')

@section('page_title', $team->name)


@section('content')

<div id="proplayers_container" class="d-flex flex-column justify-content-center">
  <h1 class="text-center page_heading">{{ $team->name }}</h1>
  
  @foreach ($players as $player)
  
    <div class="container proplayer_container d-flex flex-row">
      <div class="col-2 text-center">
        <img src="{{ $player->avatarfull }}" alt="" srcset="" class="proplayer_logo rounded-circle">
      </div>
      <div class="col-10 d-flex flex-row align-items-center">
        <div class="col-6 team_player_container d-flex flex-column">
          <a class="text-center" href="/players/{{ $player->account_id }}">
            <span class="proplayer_name">{{ $player->personaname }}</span>
          </a>
          <span class="proplayer_team_name text-center">{{ $player->team_name }}</span>
        </div>
        <div class="col-2">
          <div class="d-flex flex-column align-items-center">
            <div class="proplayer_sub_heading">MMR</div>
            <div>{{ $player->player->mmr_estimate }}</div>
          </div>
        </div>
        <div class="col-2">
          <div class="d-flex flex-column align-items-center">
            <div class="proplayer_sub_heading">Leaderboard</div>
            <div>{{ $player->player->leaderboard_rank }}</div>
          </div>
        </div>
        <div class="col-2">
          <div class="d-flex flex-column align-items-center">
            <div class="proplayer_sub_heading">Rank</div>
            <div>{{ $player->player->competitive_rank }}</div>
          </div>
        </div>
      </div>
    </div>

  @endforeach
  
</div>

@endsection
