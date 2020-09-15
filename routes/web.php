<?php

use Illuminate\Support\Facades\Route;

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

// Route to your game list. Kind of the homepage:
Route::get('games', 'GameItemsController@index')->name('games');

// Route to the page of a game:
Route::get('games/{id}', 'GameItemsController@show')->name('games.show');

// Route to a page where you can add a game to the database:
Route::get('games/create', 'GameItemsController@create')->name('games.create');
