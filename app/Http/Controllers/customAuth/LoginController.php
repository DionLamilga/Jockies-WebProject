<?php

namespace App\Http\Controllers\customAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function view(){
        return view('customAuth.login');
        }

    public function cek(Request $request){
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
     
        $credentials = $request->only('username', 'password');
     
        if(Auth::attempt($credentials)){
            //jika berhasil login
             return view('index');
            }
        else{
            return ('gagal login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/index');
    }
}
