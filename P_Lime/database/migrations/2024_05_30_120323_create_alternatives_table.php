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
            $table->float('luas_rumah'); // Luas rumah dalam satuan yang relevan
            $table->double('gaji', 15, 2); // Gaji dalam jumlah besar
            $table->integer('status'); // 0: Tidak bekerja, 1: Bekerja
            $table->integer('jumlah_usia_lanjut'); // Jumlah anggota keluarga usia lanjut
            $table->float('jarak_domisili'); // Jarak domisili dalam kilometer atau satuan lain
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
