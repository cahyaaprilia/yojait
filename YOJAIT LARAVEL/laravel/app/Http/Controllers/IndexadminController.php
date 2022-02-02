<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexadminController extends Controller
{
    public function admin (Request $request){
        // dd($request->all());
        $myUser = $request->session()->get('admin', false);
        if($myUser){
//            echo $myUser;
            return redirect()->route('dashboard');
        }else{
            return view('admin.indexadmin');
        }
    }
}
