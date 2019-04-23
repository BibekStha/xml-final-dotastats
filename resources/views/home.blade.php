@extends('layouts.app')

@section('page_title', 'Home')


@section('content')

<div id="home_container" class="d-flex flex-column justify-content-center">
    <h1 class="display-4 text-center mb-5">Welcome all <span class="dota_text">DOTA2</span> lovers</h1>
    <form role="search" id="home_search_form" class="d-flex justify-content-center">
        <div class="d-flex flex-row col-8 mt-5 mb-3" id="form_container">
            <input class="flex-grow-1 search-query" type="search" name="q"
                placeholder="Search for players, teams or heroes" aria-label="Search for players, teams or heroes">
            <button class="search_btn">
                <img src="/images/search-icon.png" alt="" srcset="">
            </button>
        </div>
    </form>
    <div class="text-center">
        Or browse categories from the left navigation panel.
    </div>
</div>

@endsection
