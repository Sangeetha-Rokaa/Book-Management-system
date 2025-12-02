<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookcontroller;



Route::get('/', function () {
    return view('books.ashu');
})->name('ashu');
Route::resource('books', bookcontroller::class);
Route::get('/home', function () {
    return view('home');
})->name('home');


