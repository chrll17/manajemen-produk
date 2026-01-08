<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProdukResource;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::latest()->paginate(5);
        return new ProdukResource(true, 'list data produk', $produk);
    }
}
