<?php

namespace App\Http\Controllers\customAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pengguna;
use Hash;

class RegisterController extends Controller
{
    public function view(){
        return view('customAuth.daftar');
        }
       
        public function store(Request $request){
 
            $validasi = $request->validate([
                'username' => ['required', 'string', 'min:3'], 
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'min:5'],
                'remember_token' => ['string'],
                'role' => ['required', 'integer']
            ]);
     
            $store = pengguna::create([
                'username' => $request->username,
                'email' => $request->email,
                'password'=> Hash::make($request->password),
                'remember_token' => $request->remember_token,
                'role' => $request->role,
            ]); 
                // return ($request->username);
                if($store){
                    return view ('customAuth.login');
                }
                else{
                    return('gagal input data');
                }
    
    }
}