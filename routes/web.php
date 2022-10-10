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
