<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (Request $request){
        // dd($request->all());
        $myUser = $request->session()->get('user', false);
        if($myUser){
//            echo $myUser;
            return redirect()->route('home');
        }else{
            return view('index');
        }
    }
}
