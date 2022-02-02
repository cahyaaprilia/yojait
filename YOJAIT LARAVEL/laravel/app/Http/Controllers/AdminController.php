<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin (Request $request){
        // dd($request->all());
        $myAdmin = $request->session()->get('admin', false);
        if($myAdmin){
//            echo $myUser;
            return redirect()->route('admin');
        }else{
            return view('admin');
        }
    }
}
