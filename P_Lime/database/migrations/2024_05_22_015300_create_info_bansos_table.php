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
        Schema::create('info_bansos', function (Blueprint $table) {
            $table->id('id_info_bansos');
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('jenis_bansos');
            $table->string('periode_bansos');
            $table->string('jumlah_bansos');
            $table->string('tanggal_penyaluran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_bansos');
    }
};
