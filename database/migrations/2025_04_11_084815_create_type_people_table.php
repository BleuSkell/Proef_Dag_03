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
        Schema::create('type_people', function (Blueprint $table) {
            $table->id();
            $table->enum('Name', ['Klant', 'Medewerker', 'Gast']);
            $table->boolean('Is_Active')->default(0);
            $table->string('Comment')->nullable()->default(null);
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_people');
    }
};
