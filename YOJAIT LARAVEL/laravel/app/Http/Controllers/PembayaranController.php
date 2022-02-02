<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index ($bookings){
        $result=Booking::findOrFail($bookings);
        return view('pembayaran',['booking'=>$result]);
        
        // dd($request->all());
        // return view('pembayaran');
        
    }
    public function bayar(Request $request){
        
    }
}
