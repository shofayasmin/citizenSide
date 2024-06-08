<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    use HasFactory;

    protected $primaryKey = 'rumah_id';

    protected $fillable = [
        'nik_pemilik', 
        'alamat', 
        'luas_bangunan', 
        'luas_tanah', 
        'jumlah_anggota_kk', 
    ];

    // Relasi dengan model Warga
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'nik_pemilik', 'nik');
    }

    // Relasi dengan model Kk
    public function kks()
    {
        return $this->hasMany(Kk::class, 'nik_kepala_keluarga', 'nik_pemilik');
    }

    // Relasi dengan model Alternatives
    public function alternatives()
    {
        return $this->hasMany(Alternatives::class, 'rumah_id');
    }

    // Event boot untuk membuat dan memperbarui Alternative
    protected static function boot()
    {
        parent::boot();

        static::created(function ($rumah) {
            $rumah->createAlternative();
        });

        static::updated(function ($rumah) {
            $rumah->updateAlternative();
        });
    }

    // Method untuk menghitung kondisi rumah
    public function calculateKondisiRumah()
    {
        $nilaiTanah = 0;
        $nilaiBangunan = 0;

        if ($this->luas_tanah < 200) {
            $nilaiTanah = 1;
        } elseif ($this->luas_tanah >= 200 && $this->luas_tanah <= 400) {
            $nilaiTanah = 3;
        } elseif ($this->luas_tanah > 400) {
            $nilaiTanah = 5;
        }

        if ($this->luas_bangunan < 100) {
            $nilaiBangunan = 1;
        } elseif ($this->luas_bangunan >= 100 && $this->luas_bangunan <= 200) {
            $nilaiBangunan = 3;
        } elseif ($this->luas_bangunan > 200) {
            $nilaiBangunan = 5;
        }

        return $nilaiTanah + $nilaiBangunan;
    }
    public function calculatePendapatanTotal()
    {
        $noKk = $this->warga->no_kk;
        $pendapatanTotal = Warga::where('no_kk', $noKk)->sum('pendapatan');
        return $pendapatanTotal;
    }


    // Method untuk membuat Alternative
    public function createAlternative()
    {
        $this->alternatives()->create([
            'name'                      => $this->nik_pemilik,
            'jumlah_usia_produktif'     => $this->kks->sum('jumlah_usia_produktif'),
            'jumlah_anggota_keluarga'   => $this->kks->sum('jumlah_anggota_kk'),
            'kondisi_rumah'             => $this->calculateKondisiRumah(),
            'jumlah_usia_lanjut'        => $this->kks->sum('jumlah_usia_lanjut'),
            'pendapatan_total'          => 0, // Placeholder, sesuaikan dengan kebutuhan
        ]);
    }

    // Method untuk membuat atau memperbarui Alternative
    public function updateAlternative()
    {
        $alternative = $this->alternatives()->first();

        if ($alternative) {
            $alternative->update([
                'jumlah_usia_produktif'     => $this->kks->sum('jumlah_usia_produktif'),
                'jumlah_anggota_keluarga'   => $this->kks->sum('jumlah_anggota_kk'),
                'kondisi_rumah'             => $this->calculateKondisiRumah(),
                'jumlah_usia_lanjut'        => $this->kks->sum('jumlah_usia_lanjut'),
                'pendapatan_total'          => 0, // Placeholder, sesuaikan dengan kebutuhan
            ]);
        } else {
            $this->createAlternative();
        }
    }
}
