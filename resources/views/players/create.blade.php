@extends('layouts.app')

@section('page_title', Update Players)


@section('content')

<div id="home_container" class="d-flex flex-column justify-content-center">
  <form method="POST" action="{{ route('players.store') }}" class="d-flex flex-column justify-content-center">
    @csrf
    <button class="btn btn-info" type="submit">Update Players</button>
  </form>
</div>

@endsection
