<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class LoginadminController extends Controller
{
    public function admin (Request $request){
        $myAdmin = $request->session()->get('admin', false);
        if($myAdmin){
            return redirect()->route('dashboard');
        }else{
            return view('admin.loginadmin');

        }
    }

    public function logoutadmin(Request $request){
        $request->session()->forget('admin');
//        return 'tess';
        return redirect()->route('indexadmin');
    }
    public function loginprocess (Request $request){
        // dd($request->all());
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $admin = Admin::where('username',$request->username)->first();
        echo $admin;
//        echo $user->password;
        if(!$admin){
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Username Not Found'
                ]);
        } else if ($admin->password == $request->password){
            echo 'login success';
            $request->session()->put('admin', $admin);
            return redirect()->route('dashboard');
        }else if($admin->password != $request->password){
            echo 'login gagal';
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Wrong Password'
                ]);
        }
//        return $request->all();
    }
}
