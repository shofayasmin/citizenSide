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
        Schema::table('comments', function (Blueprint $table) {
            if (!Schema::hasColumn('comments', 'laporan_id')) {
                $table->unsignedBigInteger('laporan_id')->after('id');

                $table->foreign('laporan_id')
                      ->references('id')
                      ->on('laporans')
                      ->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            if (Schema::hasColumn('comments', 'laporan_id')) {
                $table->dropForeign(['laporan_id']);
                $table->dropColumn('laporan_id');
            }
        });
    }
};
