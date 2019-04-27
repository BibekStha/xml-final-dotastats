@extends('layouts.app')

@section('page_title', 'Teams')


@section('content')

<div id="teams_container" class="d-flex flex-column justify-content-center">
  <h1 class="text-center page_heading">
    Teams
    <small class="page_subheading">Professional Dota 2 teams</small>
  </h1>
  {{ $teams->links()}}
  @foreach ($teams as $team)
    
    <div class="container team_container d-flex flex-row">
      <div class="col-2 text-center">
        <img src="{{ $team->logo_url }}" alt="" srcset="" class="team_logo">
      </div>
      <div class="col-10 d-flex flex-row align-items-center">
        <div class="col-6 d-flex justify-content-center">
          <a class="text-center" href="/teams/{{ $team->team_id }}">
            <span class="team_name">{{ $team->name }}</span>
          </a>
        </div>
        <div class="col-2">
          <div class="d-flex flex-column align-items-center">
            <div class="team_sub_heading">Rating</div>
            <div>{{ $team->rating }}</div>
          </div>
        </div>
        <div class="col-2">
          <div class="d-flex flex-column align-items-center">
            <div class="team_sub_heading">Wins</div>
            <div>{{ $team->wins }}</div>
          </div>
        </div>
        <div class="col-2">
          <div class="d-flex flex-column align-items-center">
            <div class="team_sub_heading">Losses</div>
            <div>{{ $team->losses }}</div>
          </div>
        </div>
      </div>
    </div>

  @endforeach
  {{ $teams->links( )}}
</div>

@endsection
