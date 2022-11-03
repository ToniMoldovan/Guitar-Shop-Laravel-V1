<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarsController;

Route::get('/', function () {
    return view('homepage');
});

Route::resource('guitars', GuitarsController::class);
