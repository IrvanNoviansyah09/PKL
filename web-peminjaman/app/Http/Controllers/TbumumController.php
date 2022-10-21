<?php

namespace App\Http\Controllers;

use App\Models\Tbumum;
use Illuminate\Http\Request;

class TbumumController extends Controller
{
    public function postUmum(Request $request){
        $tabelumum= new Tbumum;
        $tabelumum->nama=$request->nama;
        $tabelumum->jenis=$request->jenis;
        $tabelumum->jumlah=$request->jumlah;
        $tabelumum->status=$request->status;
        $tabelumum->save();
        return redirect('inventaris');

    }

    public function edit($id)
    {
        $tabelumum= Tbumum::find($id);
        return view('dashboard.inventaris.umum.edit', compact('tabelumum'));
    }

    public function update($id,Request $request){
        $tabelumum= Tbumum::find($id);
        $tabelumum->update($request->except(['_token', 'submit']));
        return redirect('/inventaris');
    }

    public function destroy($id){
        $delete = Tbumum::find($id);
        $delete->delete();
        return redirect('/inventaris');
    }
}
