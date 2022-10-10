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

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/comics/{id}', function($id){
    $cards = config('comics');
    $card = $cards[$id];
    
    return $card;
})->where('id', '[0-9]+')->name('comic');
