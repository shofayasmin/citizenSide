<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\umkm;
use Illuminate\Http\Request;

class DashboardWargaController extends Controller
{
    public function index()
    {
        return view('DashboardWarga.index');
    }

    public function acara()
    {
        $acaras = Acara::all();
        return view('DashboardWarga.acara', compact('acaras'));
    }

    public function umkm()
    {
        $umkms = umkm::all();
        return view('DashboardWarga.umkm', compact('umkms'));
    }
}
