<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form2Controller extends Controller
{
    public function index (){
        // dd($request->all());
        return view('form2');
    }
}
