<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pengguna;
use Illuminate\Support\Facades\DB;
use Hash;

class AdminController extends Controller
{
    public function adduser()
    {
        return view('admin/adduser');
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
                return view ('admin/adduser');
            }
            else{
                return('gagal input data');
            }

    }
    public function tbluser()
    {
        $penggunas = DB::table('penggunas')->get();
        return view('admin/tbluser',['penggunas' => $penggunas]);
    }
    public function deluser($id)
    {
        DB::table('penggunas')->where('id',$id)->delete();
		
	    return redirect('/admin/tbluser');
    }
}
