<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Tbumum;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        $pinjam = Peminjaman::all();
        return view('dashboard.ajuanbarang.pinjam',compact(['pinjam']));
    }
    public function pinjam(){
        $pinjam = Peminjaman::where('status',0)->get();
        return view('dashboard.ajuanbarang.umum',compact(['pinjam']));
    }
    public function store (Request $request){
        Peminjaman::create($request->except(['_token','submit']));
        return redirect('/barang');
    }
    public function setuju ($id, Request $request){
        $status = Peminjaman::find($id);
        $status->status=1;
        $status->update($request->except(['_token', 'submit']));
        $status->save();
        return redirect('/ajuan');
    }
}
