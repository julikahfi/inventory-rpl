<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class barangcontroller extends Controller
{
    public function barang()
    {
        $barang = Barang::all();
        return view('barang',compact('barang'));
    }

    public function store(Request $request)
    {
        $barang = new Barang();
        $barang->id_barang = $request->id_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->status_barang = $request->status_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga_beli = $request->harga_beli;
        $barang->tanggal_beli = $request->tanggal_beli;

        $barang->save();
        session()->flash('success','Data berhasil di simpan');
        return redirect()->back();
    }

}
