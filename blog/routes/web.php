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

/* Home routes */
Route::get('/', function () {
    return view('home');
})->name('home');

/* Characters routes */
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

/* Comic routes */
Route::get('/comics', function () {
    $comics = config('comics.data');

    return view('comics.index', compact('comics'));
})->name('comics');

Route::get('comics/{id}',  function ($id){
    $comics = config('comics.data');

    if (is_numeric($id) && $id < count($comics) && $id >= 0) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }

})->name('comic');

/* Movies routes */
Route::get('/movies', function () {
    return view('movies');
})->name('movies');


/* Tv routes */
Route::get('/tv', function () {
    return view('tv');
})->name('tv');


/* Games routes */
Route::get('/games', function () {
    return view('games');
})->name('games');


/* Collectibles routes */
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');


/* Videos routes */
Route::get('/videos', function () {
    return view('videos');
})->name('videos');


/* Fans routes */
Route::get('/fans', function () {
    return view('fans');
})->name('fans');


/* News routes */
Route::get('/news', function () {
    return view('news');
})->name('news');

/* Shop routes */
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
