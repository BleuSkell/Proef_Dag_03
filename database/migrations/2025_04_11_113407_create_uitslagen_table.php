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
            $table->unsignedBigInteger('spel_id'); // <-- dit toevoegen
            $table->integer('aantalpunten')->nullable();
            $table->timestamps();
        
            $table->foreign('spel_id')->references('id')->on('spellen')->onDelete('cascade');
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
