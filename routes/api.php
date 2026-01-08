<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//import controller ProductController
use App\Http\Controllers\Api\ProdukController;

//products
Route::apiResource('/produk', ProdukController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
