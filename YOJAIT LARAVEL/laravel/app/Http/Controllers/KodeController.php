<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KodeController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('kodepembayaran');
    }
}
