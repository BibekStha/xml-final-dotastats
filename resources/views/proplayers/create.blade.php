@extends('layouts.app')

@section('page_title', 'Home')


@section('content')

<div id="home_container" class="d-flex flex-column justify-content-center">
  <form method="POST" action="{{ route('proplayers.store') }}" class="d-flex flex-column justify-content-center">
    @csrf
    <button class="btn btn-info" type="submit">Update Pro Players</button>
  </form>
</div>

@endsection
