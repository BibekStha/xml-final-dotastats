@extends('layouts.app')

@section('page_title', 'Update Teams')


@section('content')

<div id="home_container" class="d-flex flex-column justify-content-center">
  <form method="POST" action="{{ route('teams.store') }}" class="d-flex flex-column justify-content-center">
    @csrf
    <button class="btn btn-info" type="submit">Update Teams</button>
  </form>
</div>

@endsection
