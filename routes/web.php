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
    $data = [
        'comics' => config('comics')
    ];
    //dd(config('comics'));
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', compact('comics'));
});

Route::get('/header', function () {
    $headerItems = [
        "Characters",
        "Comics",
        "Movies",
        "Tv",
        "Games",
        "Collectibles",
        "Videos",
        "Fans",
        "News",
        "Shop"
    ];
    return view('partials.header', compact('headerItems'));
});

