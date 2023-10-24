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

}
