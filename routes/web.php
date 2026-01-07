<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdukController::class)->group(function(){
    Route::get('/','index')->name('index');
});
