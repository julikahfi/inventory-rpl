<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class karyawancontroller extends Controller
{
    public function karyawan()
    {
        $karyawan = Karyawan::all();
        return view('karyawan',compact('karyawan'));
    }

    public function store(Request $request)
    {
        $karyawan = new Karyawan();
        $karyawan->id_karyawan = $request->id_karyawan;
        $karyawan->nama = $request->nama;
        $karyawan->jns_kelamin = $request->jns_kelamin;
        $karyawan->alamat = $request->alamat;
        $karyawan->no_hp = $request->no_hp;

        $karyawan->save();
        session()->flash('success','Data berhasil di simpan');
        return redirect()->back();
    }
}
