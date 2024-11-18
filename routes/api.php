<?php

use App\Http\Controllers\Api\V2\ImageAPIController;
use App\Http\Controllers\Api\V2\ImageController;
use App\Http\Controllers\Api\V2\InvoiceAPIController;
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

    Route::get('/images', [ImageAPIController::class, 'index']);
    Route::post('/images', [ImageAPIController::class, 'store']);

    Route::get('/invoice', [InvoiceAPIController::class, 'index']);
    Route::get('/invoice/create', [InvoiceAPIController::class, 'create']);
    Route::post('/invoice', [InvoiceAPIController::class, 'store']);

});
