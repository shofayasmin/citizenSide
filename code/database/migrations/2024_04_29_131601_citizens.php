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
        Schema::create('citizens', function (Blueprint $table){
            $table->id();
            $table->string('nik')->unique();
            $table->string('fullname');
<<<<<<< HEAD
            $table->string('birth_place');
=======
            $table->string('birthplace');
>>>>>>> bdf85523fa8b004315ff29b97ed4e7618e8c0020
            $table->date('birth_date');
            $table->enum('gender', ['Laki-laki','Perempuan']);
            $table->text('address');
            $table->string('religions');
            $table->string('phone');
            $table->enum('status', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('job');
            $table->string('citizenship');
            $table->string('domicile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citizens');
    }
};
