<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/nav', function () {
    return view('nav');
})->name('nav');

Route::get('/app', function () {
    return view('app');
})->name('app');