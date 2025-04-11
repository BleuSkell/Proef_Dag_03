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
            $table->unsignedBigInteger('reservering_id'); // <-- dit toevoegen
            $table->integer('aantalpunten')->nullable();
            $table->timestamps();
        
            $table->foreign('reservering_id')->references('id')->on('reserveringen')->onDelete('cascade');
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
