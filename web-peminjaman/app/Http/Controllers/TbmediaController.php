<?php

namespace App\Http\Controllers;

use App\Models\Tbmedia;
use Illuminate\Http\Request;

class TbmediaController extends Controller
{
    public function postMedia(Request $request){
        $tabelmedia= new Tbmedia;
        $tabelmedia->nama=$request->nama;
        $tabelmedia->jenis=$request->jenis;
        $tabelmedia->jumlah=$request->jumlah;
        $tabelmedia->status=$request->status;
        $tabelmedia->save();
        return redirect('inventaris');
    }
    public function edit($id)
    {
        $tabelmedia= Tbmedia::find($id);
        return view('dashboard.inventaris.media.edit', compact('tabelmedia'));
    }

    public function update($id,Request $request){
        $tabelmedia= Tbmedia::find($id);
        $tabelmedia->update($request->except(['_token', 'submit']));
        return redirect('/inventaris');
    }

    public function destroy($id){
        $delete = Tbmedia::find($id);
        $delete->delete();
        return redirect('/inventaris');
    }
}