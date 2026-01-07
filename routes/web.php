<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdukController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/tambah','create')->name('tambah');
    Route::post('/','store')->name('save');
    Route::get('/edit/{produk}','edit')->name('edit');
    route::put('/{produk}','update')->name('update');
    route::delete('/{produk}','destroy')->name('hapus');
});

Route::controller(AuthController::class)->group(function(){
    route::get('/register','showRegister')->name('showRegister');    
    route::get('/login','showLogin')->name('showLogin');
    route::post('/register','register')->name('register');
    route::post('/login','login')->name('login');
});
