<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangcontroller extends Controller
{
    public function index()
    {
        $barang = barang::get();
        return view('barang.index', ['barang'=> $barang]);
    }

    public function tambah()
    {
        return view('barang.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'kategori_barang'=>$request->kategori_barang,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
        ];

        Barang::create($data);

        return redirect()->route('barang');
    }

    public function edit($id)
    {
        $barang = Barang::find($id)->fird;

        return view('barang.form', ['barang->$barang']);
    }

    public function update($id, Request $request)
    {

        $data = [
            'kode_barang'=>$request->kode_barang,
            'nama_barang'=>$request->nama_barang,
            'kategori_barang'=>$request->kategori_barang,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
        ];
        Barang::find($id)->update($data);

        return redirect()->route('barang');
    }

    public function hapus($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang');
    }
}
