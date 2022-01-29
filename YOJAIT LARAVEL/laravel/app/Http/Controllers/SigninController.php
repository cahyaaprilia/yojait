<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('signin');
    }
}
