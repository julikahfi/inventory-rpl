<?php

namespace App\Http\Controllers;

use App\Models\Statusbarang;
use Illuminate\Http\Request;

class statusbarangcontroller extends Controller
{
    public function statusbarang()
    {
        $statusbarang = Statusbarang::all();
        return view('statusbarang',compact('statusbarang'));
    }

    public function store(Request $request)
    {
        $statusbarang = new Statusbarang();
        $statusbarang->id_status = $request->id_status;
        $statusbarang->id_barang = $request->id_barang;
        $statusbarang->jml_bagus = $request->jml_bagus;
        $statusbarang->jml_rusak_ringan = $request->jml_rusak_ringan;
        $statusbarang->jml_rusak_berat = $request->jml_rusak_berat;
        
        $statusbarang->save();
        session()->flash('success','Data berhasil di simpan');
        return redirect()->back();
    }

}
