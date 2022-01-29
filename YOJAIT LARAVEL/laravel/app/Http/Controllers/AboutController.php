<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('about');
    }
}
