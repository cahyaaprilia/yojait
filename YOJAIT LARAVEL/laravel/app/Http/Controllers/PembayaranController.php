<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('pembayaran');
    }
}
