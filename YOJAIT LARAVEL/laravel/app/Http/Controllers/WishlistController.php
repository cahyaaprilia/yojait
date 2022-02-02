<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index (Request $request){
        // dd($request->all());
        // $user = User::where('email',$request->email)->first();;
        // echo $user;
        $myUser = $request->session()->get('user', false);
        $data = Booking::where('user_id',$myUser->id)-> get();
        return view('wishlist',['bookings'=>$data]);
        // echo $data;
    }

}
