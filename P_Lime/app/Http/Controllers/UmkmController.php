<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function register()
    {
        return view('umkm.register');
    }
}
