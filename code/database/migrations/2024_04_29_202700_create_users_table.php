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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
<<<<<<< HEAD
            $table->String('user_nik');
            $table->foreign('user_nik')->references('nik')->on('citizens');
            $table->enum('role', ['admin', 'rt', 'rw', 'secretary', 'citizen'])->default('citizen');
=======
            $table->foreignId('citizen_id')->constrained(
                table: 'citizens', indexName: 'users_citizen_id'
            );
>>>>>>> bdf85523fa8b004315ff29b97ed4e7618e8c0020
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
