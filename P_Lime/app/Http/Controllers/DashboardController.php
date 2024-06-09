<?php

namespace App\Http\Controllers;

use App\Models\Bansos;
use App\Models\Expenditure;
use App\Models\Income;
use App\Models\Iuran;
use App\Models\Kk;
use App\Models\laporan;
use App\Models\Rumah;
use App\Models\umkm;
use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function rw()
    {
        $laporan = Laporan::orderByRaw("FIELD(status,'Belum Selesai', 'Selesai')")->get();
        $user = Auth::user();

        $incomes = Income::orderBy('date')->get();
        $expenditures = Expenditure::orderBy('date')->get();

        $dates = [];
        $expenditureData = [];
        $incomeData = [];

        foreach ($expenditures as $expenditure) {
            $date = Carbon::parse($expenditure->date); // Konversi string menjadi objek tanggal
            $dates[] = $date->format('Y-m-d'); // Format tanggal menjadi 'YYYY-MM'
            $expenditureData[] = $expenditure->amount; // Gunakan atribut amount sebagai data expenditure
        }
        foreach ($incomes as $income) {
            $date = Carbon::parse($expenditure->date); // Konversi string menjadi objek tanggal
            $dates[] = $date->format('Y-m-d'); // Format tanggal menjadi 'YYYY-MM'
            $incomeData[] = $income->inflow; // Gunakan atribut amount inflow data expenditure
        }
        $dates = array_unique($dates);
        sort($dates);

        $totalWarga = Warga::count();
        $totalKk = Kk::count();
        $totalRumah = Rumah::count();
        $totalUmkm = umkm::count();
        // Ambil daftar pengirim beserta jumlah laporan mereka
        $pelapor = Laporan::selectRaw('pengirim, COUNT(*) as total_laporan')
        ->groupBy('pengirim')
        ->orderBy('total_laporan', 'desc')
        ->get();

        $lastUpdated = max(
            Income::latest('updated_at')->value('updated_at'),
            Expenditure::latest('updated_at')->value('updated_at'),
            Laporan::latest('updated_at')->value('updated_at'),
            Warga::latest('updated_at')->value('updated_at'),
            Kk::latest('updated_at')->value('updated_at'),
            Rumah::latest('updated_at')->value('updated_at'),
            Umkm::latest('updated_at')->value('updated_at')
        );

        $warga = Warga::select('agama', 'jenis_kelamin', Warga::raw('count(*) as total'))
        ->groupBy('agama', 'jenis_kelamin')
        ->get();

        // Ambil data penyaluran bansos dari model
        $penyaluranBansos = Bansos::all();

        return view('dashboard.rw',compact(
        'laporan',
        'dates',
        'user',
        'totalWarga',
        'totalKk',
        'totalRumah',
        'totalUmkm',
        'pelapor',
        'lastUpdated',
        'warga',
        'penyaluranBansos',
        'incomeData',
        'expenditureData'
    ));
    }

    // public function rw()
    // {
    //     $laporan = Laporan::orderByRaw("FIELD(status,'Belum Selesai', 'Selesai')")->get();
    //     $user = Auth::user();


    //     $iurans = Iuran::selectRaw('MONTH(tanggal) as month, SUM(total) as total')
    //         ->groupBy('month')
    //         ->orderBy('month')
    //         ->get();

    //     $dates = $iurans->pluck('month')->map(function ($month) {
    //         return Carbon::create()->month($month)->format('F'); // Mengubah angka bulan menjadi nama bulan
    //     });
    //     $totals = $iurans->pluck('total');

    //     $totalWarga = Warga::count();
    //     $totalKk = Kk::count();
    //     $totalRumah = Rumah::count();
    //     $totalUmkm = umkm::count();
    //     // Ambil daftar pengirim beserta jumlah laporan mereka
    //     $pelapor = Laporan::selectRaw('pengirim, COUNT(*) as total_laporan')
    //     ->groupBy('pengirim')
    //     ->orderBy('total_laporan', 'desc')
    //     ->get();

    //     $lastUpdated = max(
    //         Iuran::latest('updated_at')->value('updated_at'),
    //         Laporan::latest('updated_at')->value('updated_at'),
    //         Warga::latest('updated_at')->value('updated_at'),
    //         Kk::latest('updated_at')->value('updated_at'),
    //         Rumah::latest('updated_at')->value('updated_at'),
    //         Umkm::latest('updated_at')->value('updated_at')
    //     );

    //     $warga = Warga::select('agama', 'jenis_kelamin', Warga::raw('count(*) as total'))
    //     ->groupBy('agama', 'jenis_kelamin')
    //     ->get();

    //     // Ambil data penyaluran bansos dari model
    //     $penyaluranBansos = Bansos::all();

    //     return view('dashboard.rw',compact(
    //     'laporan',
    //     'dates',
    //     'totals',
    //     'user',
    //     'totalWarga',
    //     'totalKk',
    //     'totalRumah',
    //     'totalUmkm',
    //     'pelapor',
    //     'lastUpdated',
    //     'warga',
    //     'penyaluranBansos'));
    // }
}
