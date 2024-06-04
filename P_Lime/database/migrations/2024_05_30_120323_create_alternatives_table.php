<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alternatives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('jumlah_usia_produktif');     // Jumlah orang yang produktif dalam kk, atau belum lansia
            $table->double('jumlah_anggota_keluarga');  // total jumlah anggota keluarga yg tinggal 1 rumah
            $table->integer('kondisi_rumah');           // semakin besar angkanya berarti semakin bagus rating rumah tersebut
            $table->integer('jumlah_kk');               // Jumlah kk dalam 1 rumah
            $table->float('pendapatan_total',15,2);     // jumlah total pendapatan 1 rumah
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatives');
    }
};
