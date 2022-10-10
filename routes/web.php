<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

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
})->name('home');

Route::get('/characters ', function () {
    return view('characters');
})->name('characters');

Route::get('/comics ', function () {
    return view('comics.index');
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $cards = config('comics');
    if ($id < count($cards)) {
        $card = $cards[$id];
        $data = [
            'comic' => $card
        ];

        return view('comics.show', $data);
    } else {
        abort(404);
    }
})->where('id', '[0-9]+')->name('comic');

Route::get('/movies ', function () {
    return view('movies');
})->name('movies');

Route::get('/tv ', function () {
    return view('tv');
})->name('tv');

Route::get('/games ', function () {
    return view('games');
})->name('games');

Route::get('/collectibles ', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos ', function () {
    return view('videos');
})->name('videos');

Route::get('/fans ', function () {
    return view('fans');
})->name('fans');

Route::get('/news ', function () {
    return view('news');
})->name('news');

Route::get('/shop ', function () {
    return view('shop');
})->name('shop');
