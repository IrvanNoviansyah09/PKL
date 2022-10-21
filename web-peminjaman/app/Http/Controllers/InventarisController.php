<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;
use App\Models\Tbumum;
use App\Models\Tbolahraga;
use App\Models\Tbmedia;
use App\Models\Tbpanahan;
use App\Models\Umum;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabelumum= Tbumum::all();
        $tabelolahraga = Tbolahraga::all();
        $tabelmedia = Tbmedia::all();
        $tabelpanahan = Tbpanahan::all();
        return view('dashboard.inventaris.inventaris',compact('tabelumum', 'tabelolahraga', 'tabelmedia', 'tabelpanahan',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function surat($id)
    {
        $umum = Umum::find($id);
        return view('layouts.cetak',compact(['umum']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaris $inventaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $tabelumum = Tbumum::find($id);
        // $tabelumum ->delete();
        // return view();
    }
}
