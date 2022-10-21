<?php

namespace App\Http\Controllers;

use App\Models\Tbumum;
use App\Models\Umum;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umum = Umum::all();
        return view('dashboard.ajuanbarang.umum',compact(['umum']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $umum = Tbumum::all();
        return view('dashboard.pengajuan.umum.create',compact(['umum']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Umum::create($request->except(['_token','submit']));
        return redirect('/pengajuan');
    }
    public function setuju($id){
        $umum = Umum::find($id);
        $umum->status=1;
        $umum->save();
        return redirect('/ajuan');
    }
    public function tolak($id){
        $umum = Umum::find($id);
        $umum->status=2;
        $umum->save();
        return redirect('/ajuan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function show(Umum $umum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function edit(Umum $umum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Umum $umum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Umum  $umum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Umum $umum)
    {
        //
    }
}
