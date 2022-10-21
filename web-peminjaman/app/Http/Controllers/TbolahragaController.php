<?php

namespace App\Http\Controllers;

use App\Models\Tbolahraga;
use Illuminate\Http\Request;

class TbolahragaController extends Controller
{
    public function postOlahraga(Request $request){
        $tabelolahraga= new Tbolahraga;
        $tabelolahraga->nama=$request->nama;
        $tabelolahraga->jenis=$request->jenis;
        $tabelolahraga->jumlah=$request->jumlah;
        $tabelolahraga->status=$request->status;
        $tabelolahraga->save();
        return redirect('inventaris');

    }

    public function edit($id)
    {
        $tabelolahraga= Tbolahraga::find($id);
        return view('dashboard.inventaris.olahraga.edit', compact('tabelolahraga'));
    }

    public function update($id,Request $request){
        $tabelolahraga= Tbolahraga::find($id);
        $tabelolahraga->update($request->except(['_token', 'submit']));
        return redirect('/inventaris');
    }

    public function destroy($id){
        $delete = Tbolahraga::find($id);
        $delete->delete();
        return redirect('/inventaris');
    }
}
