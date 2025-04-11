<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Person_id');
            $table->string('Mobile', 20);
            $table->string('E_mail', 150);
            $table->boolean('IsActief')->default(true); 
            $table->text('Opmerking')->nullable();
            $table->dateTime('DatumAangemaakt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('DatumGewijzigd')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('Person_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
