<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('activity');
    }
}
