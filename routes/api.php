<?php

use App\Http\Controllers\Api\V2\ImageController;
use App\Http\Controllers\Api\V2\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
Route::group(['prefix'=>'v1'], function(){
    Route::get('/images', [ImageController::class, 'index']);
    Route::post('/images', [ImageController::class, 'store']);
});*/

Route::group(['prefix'=>'v2'], function(){
    Route::get('/images', [ImageController::class, 'index']);
    Route::post('/images', [ImageController::class, 'store']);
});

Route::group(['prefix'=>'v2'], function(){
    Route::get('/invoice', [InvoiceController::class, 'index']);
    Route::post('/invoice', [InvoiceController::class, 'store']);

});
