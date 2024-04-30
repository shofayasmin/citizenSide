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
        Schema::table('citizens', function (Blueprint $table) {
            $table->foreignId('family_card_id')->constrained(
                table: 'family_cards', indexName: 'citizens_family_card_id'
            );
            $table->foreignId('rt_id')->constrained(
                table: 'rts', indexName: 'citizens_rt_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('citizens', function (Blueprint $table) {
            $table->dropForeign('citizens_family_card_id');
            $table->dropForeign('citizens_rt_id');
        });
    }
};
