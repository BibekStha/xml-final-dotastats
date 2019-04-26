@extends('layouts.app')

@section('page_title', 'Pro Players')


@section('content')

<div id="proplayers_container" class="d-flex flex-column justify-content-center">
  <h1 class="text-center page_heading">Pro Players</h1>
  {{ $pp->links( )}}
  
  @foreach ($pp as $player)
  
    <div class="container proplayer_container d-flex flex-row">
      <div class="col-2">
        <img src="{{ $player->avatarfull }}" alt="" srcset="" class="proplayer_logo rounded-circle">
      </div>
      <div class="col-10 d-flex flex-row align-items-center">
        <div class="col-6 team_name d-flex flex-column justify-content-around">
          <span class="proplayer_name">{{ $player->personaname }}</span>
          <span class="proplayer_team_name">{{ $player->team_name }}</span>
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
  {{ $pp->links( )}}
</div>

@endsection
