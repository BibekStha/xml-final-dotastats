@extends('layouts.app')

@section('page_title', 'Heroes')


@section('content')

<div id="heroes_container" class="d-flex flex-column justify-content-center">
  <h1 class="text-center page_heading">
    Heroes
    <small class="page_subheading">All hero characters in the game</small>
  </h1>

  <h2 class="text-center hero_attr_heading">Strength</h2>
  <div class="container d-flex flex-row flex-wrap">
    @foreach ($s_heroes as $s_hero)
      <div class="col-2 hero_img_container">
        <img class="hero_img" src="https://api.opendota.com{{ $s_hero->img }}" alt="" srcset="">
      </div>
    
    @endforeach
  </div>

  <h2 class="text-center hero_attr_heading">Agility</h2>
  <div class="container d-flex flex-row flex-wrap">
    @foreach ($a_heroes as $a_hero)
      <div class="col-2 hero_img_container">
        <img class="hero_img" src="https://api.opendota.com{{ $a_hero->img }}" alt="" srcset="">
      </div>
    
    @endforeach
  </div>

  <h2 class="text-center hero_attr_heading">Intelligence</h2>
  <div class="container d-flex flex-row flex-wrap">
    @foreach ($i_heroes as $i_hero)
      <div class="col-2 hero_img_container">
        <img class="hero_img" src="https://api.opendota.com{{ $i_hero->img }}" alt="" srcset="">
      </div>
    
    @endforeach
  </div>

</div>

@endsection
