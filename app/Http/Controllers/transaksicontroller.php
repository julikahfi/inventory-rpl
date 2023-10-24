<?php

namespace App\Http\Controllers;

use App\Models\Transaksis;
use Illuminate\Http\Request;

class transaksicontroller extends Controller
{
    public function transaksi()
    {
        $transaksi= Transaksis::all();
        return view('transaksi',compact('transaksi'));
    }
}
