<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index (Request $request){
        $myUser = $request->session()->get('user', false);
        if($myUser){
            return redirect()->route('home');
        }else{
            return view('user.login');

        }
    }

    public function logout(Request $request){
        $request->session()->forget('user');
//        return 'tess';
        return redirect()->route('index');
    }
    public function postlogin (Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email',$request->email)->first();
        echo $user;
//        echo $user->password;
        if(!$user){
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Email Not Found'
                ]);
        } else if ($user->password == $request->password){
            echo 'login success';
            $request->session()->put('user', $user);
            return redirect()->route('home');
        }else if($user->password != $request->password){
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
