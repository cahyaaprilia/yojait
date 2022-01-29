<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('booking');
    }
}
