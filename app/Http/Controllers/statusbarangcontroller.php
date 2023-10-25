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
}
