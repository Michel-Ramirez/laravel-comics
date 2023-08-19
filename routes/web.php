<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $main_links = config('main_links');
    $comics = config('comics');


    return view('home', compact('main_links'), compact('comics'));
})->name('home');

Route::get('/ActionComics', function () {
    $main_links = config('main_links');
    $comics = config('comics');


    return view('pages.action_comic', compact('main_links'), compact('comics'));
})->name('action_comic');
