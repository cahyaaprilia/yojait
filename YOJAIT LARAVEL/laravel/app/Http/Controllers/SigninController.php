<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index (){
        // dd($request->all());
        return view('user.register');
    }

    public function register(Request $request) {
//        return $request->all();
        $user = User::create($request->all());
        return redirect()->route('login')->with([
            'success' => 'Register Berhasil'
        ]);
    }
}
