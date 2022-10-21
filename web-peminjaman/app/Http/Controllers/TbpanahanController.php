<?php

namespace App\Http\Controllers;

use App\Models\Tbpanahan;
use Illuminate\Http\Request;

class TbpanahanController extends Controller
{
    public function postPanahan(Request $request){
        $tabelpanahan= new Tbpanahan;
        $tabelpanahan->nama=$request->nama;
        $tabelpanahan->jenis=$request->jenis;
        $tabelpanahan->jumlah=$request->jumlah;
        $tabelpanahan->status=$request->status;
        $tabelpanahan->save();
        return redirect('inventaris');

    }
    public function edit($id)
    {
        $tabelpanahan= Tbpanahan::find($id);
        return view('dashboard.inventaris.panahan.edit', compact('tabelpanahan'));
    }

    public function update($id,Request $request){
        $tabelpanahan= Tbpanahan::find($id);
        $tabelpanahan->update($request->except(['_token', 'submit']));
        return redirect('/inventaris');
    }

    public function destroy($id){
        $delete = Tbpanahan::find($id);
        $delete->delete();
        return redirect('/inventaris');
    }
}
