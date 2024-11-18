<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v0', function () {
    return view('landing');
});

Route::resource('images', ImageController::class);


Route::get('/dashboard', [PageController::class, 'index']);

Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/invoice/create', [InvoiceController::class, 'create']);



