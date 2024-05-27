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
        Schema::create('s_p_k_s', function (Blueprint $table) {
            $table->id('id_spk');
            $table->integer('luas_rumah');
            $table->string('gaji');
            $table->enum('status',['Sudah Kawin','Sudah Kawin Sudah ada Anak','Sudah Kawin Belum ada Anak','Belum Kawin']);
            $table->integer('jumlah_usia_lanjut');
            $table->integer('jarak_domisili');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_p_k_s');
    }
};
