<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index (Request $request){
        // dd($request->all());
        $myUser = $request->session()->get('user', false);
        if($myUser){
//            echo $myUser;
        return view('profile');
        }else{
            return redirect()->route('login');
        }
        
    }
}
