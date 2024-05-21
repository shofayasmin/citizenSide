<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BansosController extends Controller
{
    

    public function informasi()
    {
        return view('Bansos.informasi');
    }
    public function pengajuan()
    {
        return view('Bansos.pengajuan');
    }
    public function manage()
    {
        return view('Bansos.manage');
    }
    public function lurah()
    {
        return view('Bansos.lurah');
    }
}
