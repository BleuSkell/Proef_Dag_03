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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('TypePerson_Id');
            $table->string('FirstName', 100);
            $table->string('Infix', 50)->nullable();
            $table->string('LastName', 100);
            $table->string('CallName', 100);
            $table->string('IsAdult', 20)->nullable();
            $table->boolean('IsActief')->default(true); 
            $table->text('Opmerking')->nullable();
            $table->dateTime('DatumAangemaakt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('DatumGewijzigd')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('TypePerson_Id')->references('id')->on('type_people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
