<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('wishlist');
    }
}
