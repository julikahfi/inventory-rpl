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
}
