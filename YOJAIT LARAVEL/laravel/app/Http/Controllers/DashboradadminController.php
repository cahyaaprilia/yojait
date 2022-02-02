<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class DashboradadminController extends Controller
{
    public function admin(Request $request)
    {
        $myAdmin = $request->session()->get('admin', false);
        if ($myAdmin) {
            return view('admin.dashboard');
        } else {
            return redirect()->route('indexadmin');
        }
    }

    public function index()
    {
        $data = Booking::all();

        return view('process', compact('data'));
    }

    public function user(Request $request)
    {
        $myAdmin = $request->session()->get('admin', false);
        if ($myAdmin) {
            $data = User::all();
            return view('admin.user', ['users' => $data]);
        } else {
            return redirect()->route('indexadmin');
        }
    }
    public function pesan(Request $request)
    {
        $myAdmin = $request->session()->get('admin', false);
        if ($myAdmin) {
            $data = Booking::all();
            return view('admin.pesanan', ['bookings' => $data]);
        } else {
            return redirect()->route('indexadmin');
        }
    }
    public function order (){
        return view('admin.pesanan');
        
        // dd($request->all());
        // return view('pembayaran');
        
    }
    public function view($bookings)
    {
            $result=Booking::findOrFail($bookings);
            return view('admin.view',['booking'=>$result]);
            
            // dd($request->all());
            // return view('pembayaran');  
        }

    public function history(Request $request)
    {
        $myAdmin = $request->session()->get('admin', false);
        if ($myAdmin) {
            $data = Booking::all();
            return view('admin.history', ['bookings' => $data]);
        } else {
            return redirect()->route('indexadmin');
        }
    }

    public function delete($id)
    {
        # code...
        $data = Booking::find($id);

        $data->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $data = Booking::find($id);
        
        $request->validate([
            'status' => 'required'
        ]);
        
        $data->update([
            'status' => $request->status
        ]);

       #dd($request->all());
       return redirect()->route('process');
    }

    

    
}
