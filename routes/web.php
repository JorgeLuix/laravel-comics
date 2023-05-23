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
    $comics = config('comics');
    $headerItems = config('headerItems');
    $listDcComics = config('customs.listDcComics');
    $listDc = config('customs.listDc');
    $sitesList = config('customs.sitesList');
    return view('home', compact('comics', 'headerItems', 'listDcComics', 'listDc', 'sitesList'));

})->name('home');

// Route::get('/comics', function () {
//     $comics = config('comics');
//     return View::make('home', compact('comics'));
// });



