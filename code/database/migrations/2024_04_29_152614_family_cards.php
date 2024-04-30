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
        Schema::create('family_cards', function(Blueprint $table){
            $table->id();
            $table->string('address');
            $table->foreignId('head_id')->constrained(
                table: 'citizens', indexName: 'family_head_id'
            );
            $table->integer('total_members');
            $table->integer('total_productive_members');
            $table->integer('total_elderly_members');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_cards');
    }
};
