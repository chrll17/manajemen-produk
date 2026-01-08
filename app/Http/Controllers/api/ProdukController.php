<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProdukResource;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::latest()->paginate(5);
        return new ProdukResource(true, 'list data produk', $produk);
    }
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'nama'=>'required',
            'kategori'=>'required',
            'harga'=>'required|numeric',
            'stok'=>'required|numeric',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $produk = Produk::create([
            'nama'=>$request['nama'],
            'kategori'=>$request['kategori'],
            'harga'=>$request['harga'],
            'stok'=>$request['stok']
        ]);

        return new ProdukResource(true, 'Data Produk Berhasil Ditambahkan!', $produk);
    }
    public function update(Request $request, Produk $produk)
    {
        $validator=Validator::make($request->all(),[
            'nama'=>'required',
            'kategori'=>'required',
            'harga'=>'required|numeric',
            'stok'=>'required|numeric',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        
        $produk->update([
            'nama'=>$request['nama'],
            'kategori'=>$request['kategori'],
            'harga'=>$request['harga'],
            'stok'=>$request['stok']
        ]);

        return new ProdukResource(true, 'Data Produk Berhasil Diubah!', $produk);
    }
}
