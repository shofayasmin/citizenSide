<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function warga()
    {
        return view('dashboard.index_warga');
    }
    public function rw()
    {
        return view('dashboard.rw');
    }
}
