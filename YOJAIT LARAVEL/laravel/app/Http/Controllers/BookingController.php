<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index (Request $request){
        // dd($request->all());
        $myUser = $request->session()->get('user', false);
        if($myUser){
//            echo $myUser;
        return view('booking');
        }else{
            return redirect()->route('login');
        }
        
    }

    public function store(Request $request){
        $myUser = $request->session()->get('user', false);
        $validateData = $request -> validate([
            'nama_depan'    => 'required|min:3|max:50',
            'nama_belakang' => 'required|min:3|max:50',
            'alamat'        => 'required',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'photo'         => 'required|file|image|max:1000',
            'type'          => 'required'
        ]);
        $booking = new Booking();
        $booking->nama = "{$validateData['nama_depan']} {$validateData['nama_belakang']}";
        $booking->alamat = $validateData['alamat'];
        $booking->start_date = $validateData['start_date'];
        $booking->end_date = $validateData['end_date'];
        $booking->status = 'baru';
        $booking->keterangan = 'Pesanan Masuk';
        $booking->user_id= $myUser->id;
        $booking->type= $validateData['type'];
        if($request->hasFile('photo'))
        {$extFile = $request->photo->getClientOriginalExtension();
            $namaFile = 'booking'.time().".".$extFile;
            $path = $request->photo->move('assets/images',$namaFile);
            $booking->photo=$path;
        }
        $booking->save();
        $request->session()->flash('pesan','Pesanan berhasil dibuat');
        return redirect()->route('wishlist');
    }

    public function edit()    {
        # code...
    }
}
