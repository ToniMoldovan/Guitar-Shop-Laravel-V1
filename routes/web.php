<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarsController;

Route::get('/home', function () {
    return '<h1>Hello there! :)</h1>';
})->name('home');

Route::resource('guitars', GuitarsController::class);
