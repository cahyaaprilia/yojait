<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NodeController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('nota');
    }
}
