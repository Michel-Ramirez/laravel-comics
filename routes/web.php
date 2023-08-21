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

    // $main_links = config('main_links');
    $comics = config('comics');

    return view('home', compact('comics'));
})->name('home');

Route::get('/comic{index}', function ($index) {
    // $main_links = config('main_links');
    $comics = config('comics');

    $comic = $comics[$index];

    return view('pages.comic', compact('comic'));
})->name('comic');
