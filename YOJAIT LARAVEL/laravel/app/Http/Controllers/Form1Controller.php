<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form1Controller extends Controller
{
    public function index (){
        // dd($request->all());
        return view('form1');
    }
}
