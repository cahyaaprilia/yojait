<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('profile');
    }
}
