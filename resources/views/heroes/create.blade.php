@extends('layouts.app')

@section('page_title', 'Update Heroes')


@section('content')

<div id="home_container" class="d-flex flex-column justify-content-center">
  <form method="POST" action="{{ route('heroes.store') }}" class="d-flex flex-column justify-content-center">
    @csrf
    <button class="btn btn-info" type="submit">Update Heroes</button>
  </form>
</div>

@endsection
