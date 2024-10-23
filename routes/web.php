<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v0', function () {
    return view('landing');
});

Route::resource('images', ImageController::class);


