<?php

namespace App\Http\Controllers;

use App\Models\Iuran;
use App\Models\laporan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function rw()
    {
        $laporan = Laporan::orderByRaw("FIELD(status,'Belum Selesai', 'Selesai')")->get();
        $iuran = Iuran::all();

        return view('dashboard.rw',compact('laporan','iuran'));
    }
    
}
