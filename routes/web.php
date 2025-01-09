<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('underconstruction');
});

Route::get('/v0', function () {
    return view('landing');
});

Route::get('/bootcamp', [CoursesController::class, 'index']);
Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/courses/{id}', [CoursesController::class, 'show']);
Route::get('/tutors', 'TutorController@index');
Route::get('/pricing', 'PricingController@index');
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');


Route::resource('images', ImageController::class);


Route::get('/dashboard', [PageController::class, 'index']);

Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/invoice/create', [InvoiceController::class, 'create']);
