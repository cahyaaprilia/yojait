<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoneController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('done');
    }
}
