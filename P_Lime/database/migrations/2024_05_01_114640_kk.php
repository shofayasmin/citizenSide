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
        Schema::create('kks', function (Blueprint $table) {
            $table->id('id_kk');
            $table->string('no_kk',30)->unique();
            $table->text('alamat');
            $table->string('nik_kepala_keluarga',30)->unique();
            $table->integer('jumlah_usia_produktif');
            $table->integer('jumlah_anggota_kk');
            $table->integer('jumlah_usia_lanjut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kks');
    }
};
