<?php

namespace App\Http\Controllers\AdminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adduser()
    {
        return view('admin/adduser');
    }
    public function tbluser()
    {
        $penggunas = DB::table('penggunas')->get();
        return view('admin/tbluser',['penggunas' => $penggunas]);
    }
}
