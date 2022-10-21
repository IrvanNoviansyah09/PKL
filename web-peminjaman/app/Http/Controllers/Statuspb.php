<?php

namespace App\Http\Controllers;

use App\Models\Umum;
use Illuminate\Http\Request;

class Statuspb extends Controller
{
    public function index (){
        $umum = Umum::all();
        return view('dashboard.sbarangmhs.umum',compact(['umum']));
    }
}
