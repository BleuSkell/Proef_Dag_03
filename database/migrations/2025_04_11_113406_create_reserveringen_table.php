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
        Schema::create('reserveringen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persoon_id')->constrained('personen')->onDelete('cascade');
            $table->foreignId('pakketoptie_id')->constrained('pakketoptie')->onDelete('cascade');
            $table->date('datum');
            $table->integer('aantal_volwassenen');
            $table->integer('aantal_kinderen')->nullable();
            $table->time('begintijd');
            $table->time('eindtijd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserveringen');
    }
};
