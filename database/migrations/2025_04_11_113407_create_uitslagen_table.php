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
        Schema::create('uitslagen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('spel_id')->constrained('spellen')->onDelete('cascade');
            $table->integer('aantalpunten')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uitslagen');
    }
};
