<?php

namespace App\Http\Controllers;

use App\Models\Tbmedia;
use App\Models\Tbolahraga;
use App\Models\Tbpanahan;
use App\Models\Tbumum;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $tabelumum= Tbumum::all();
        $tabelolahraga = Tbolahraga::all();
        $tabelmedia = Tbmedia::all();
        $tabelpanahan = Tbpanahan::all();
        return view('dashboard.ajuanbarang.barang',compact('tabelumum', 'tabelolahraga', 'tabelmedia', 'tabelpanahan',));
    }
}
