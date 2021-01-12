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

    public function edituser($id)
    {
	    $penggunas = DB::table('penggunas')->where('id',$id)->get();
    	return view('admin/edituser',['penggunas' => $penggunas]);
 
    }

    public function update(Request $request)
    {
        DB::table('penggunas')->where('id',$request->id)->update([
            'username' => $request->username,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'remember_token' => $request->remember_token,
            'role' => $request->role,
        ]);
        return redirect('/admin/tbluser');
    }

    public function deluser($id)
    {
        DB::table('penggunas')->where('id',$id)->delete();
		
	    return redirect('/admin/tbluser');
    }

    public function tbltransaksi()
    {
        $transaksis = DB::table('transaksis')->get();
        return view('admin/tbltransaksi',['transaksis' => $transaksis]);
    }

    public function deltransaksi($id_tr)
    {
        DB::table('transaksis')->where('id_tr',$id_tr)->delete();
		
	    return redirect('/admin/tbltransaksi');
    }
}
