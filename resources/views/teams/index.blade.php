@extends('layouts.app')

@section('page_title', 'Home')


@section('content')

<div id="teams_container" class="d-flex flex-column justify-content-center">
  <h1 class="text-center page_heading">Teams</h1>
  {{ $teams->links( )}}
  @foreach ($teams as $team)
    
    <div class="container team_container d-flex flex-row">
      <div class="col-2">
        <img src="{{ $team->logo_url }}" alt="" srcset="" class="team_logo">
      </div>
      <div class="col-10 d-flex flex-row align-items-center">
        <div class="col-6 team_name d-flex justify-content-center">
          {{ $team->name }}
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
