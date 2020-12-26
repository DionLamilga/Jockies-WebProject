<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksi;

class TransaksiController extends Controller
{
    //
    public function view(){
        return view('/index');
        }

    public function store(Request $request){
 
        $validasi = $request->validate([
            'notelp' => [ 'string', 'max:255'],
            'ign' => [ 'min:5'],
            'pass' => ['string'],
            'rank_awal' => [ 'string'],
            'rank_tujuan' => [ 'string'],
            'price' => [ 'string'],
            'id' => [ 'string']
        ]);
 
        $store = transaksi::create([
            'notelp' => $request->notelp,
            'ign' => $request->ign,
            'pass'=> $request->pass,
            'rank_awal' => $request->rank_awal,
            'rank_tujuan' => $request->rank_tujuan,
            'price' => $request->price,
            'id' => $request->id,
        ]); 
            
            if($store){
                return view ('/index');
            }
            else{
                return('gagal input data');
            }

}
}
