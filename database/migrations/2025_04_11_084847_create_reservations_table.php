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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Person_id')->constrained('people')->onDelete('cascade');
            $table->foreignId('OpeningTime_id')->constrained('opening_times')->onDelete('cascade');
            $table->foreignId('Lane_id')->constrained('lanes')->onDelete('cascade');
            $table->foreignId('PackageOption_id')->constrained('package_options')->onDelete('cascade');
            $table->enum('ReservationStatus', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->integer('ReservationNumber')->unique();
            $table->date('Date');
            $table->integer('TotalHours');
            $table->time('StartTime');
            $table->time('EndTime');
            $table->integer('AdultsAmount');
            $table->integer('ChildrenAmount');
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
        Schema::dropIfExists('reservations');
    }
};
