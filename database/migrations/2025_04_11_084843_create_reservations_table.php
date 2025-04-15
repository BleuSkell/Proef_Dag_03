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
            $table->foreignId('PackageOption_id')->nullable()->default(null)->constrained('package_options')->onDelete('cascade');
            $table->enum('ReservationStatus', ['Bevestigd', 'Geannuleerd'])->default('Bevestigd');
            $table->bigInteger('ReservationNumber')->unique();
            $table->date('Date');
            $table->integer('TotalHours');
            $table->time('StartTime');
            $table->time('EndTime');
            $table->integer('AdultsAmount');
            $table->integer('ChildrenAmount')->nullable()->default(null);
            $table->boolean('Is_Active')->default(0);
            $table->string('Comment')->nullable()->default(null);
            $table->dateTime('CreatedAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('UpdatedAt')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
