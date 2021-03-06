<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('login/steam', 
    'Auth\SteamLoginController@login')->name('login.steam');
Route::get('auth/steam', 
    'Auth\SteamLoginController@authenticate')->name('auth.steam'); // callback route when returning from steam

Route::resource('teams', 'TeamController');
Route::resource('heroes', 'HeroController');
Route::resource('proplayers', 'ProPlayerController');
Route::resource('players', 'PlayerController');
Route::resource('myprofile', 'ProfileController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

