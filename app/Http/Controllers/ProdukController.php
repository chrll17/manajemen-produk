<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk=Produk::all();
        return view('produk.index',['produk'=>$produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'nama'=>'required',
            'kategori'=>'required',
            'harga'=>'required|numeric',
            'stok'=>'required|numeric',
        ]);

        Produk::create([
            'nama'=>$validated['nama'],
            'kategori'=>$validated['kategori'],
            'harga'=>$validated['harga'],
            'stok'=>$validated['stok']
        ]);

        return redirect()->route('index')->with('sukses','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
