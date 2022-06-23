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
    return view('layouts/main');
});

Route::get('fumetti', function () {
    $data = config('comics');

    return view('comics', ['comics'=>$data]);
})->name('comics');

Route::get('chi siamo', function () {
    return view('about');
})->name('about');

Route::get('contatti', function () {
    return view('contact');
})->name('contact');
