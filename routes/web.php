<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdukController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/tambah','create')->name('tambah');
    Route::post('/','store')->name('save');
    Route::get('/edit/{produk}','edit')->name('edit');
    route::put('/{produk}','update')->name('update');
});
