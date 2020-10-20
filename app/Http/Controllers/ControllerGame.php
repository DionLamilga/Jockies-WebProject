<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerGame extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function contact()
    {
        return view('contact');
    }
}
