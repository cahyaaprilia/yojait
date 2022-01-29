<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('process');
    }
}
