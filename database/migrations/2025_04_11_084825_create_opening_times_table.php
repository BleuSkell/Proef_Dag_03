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
        Schema::create('opening_times', function (Blueprint $table) {
            $table->id();
            $table->string('DayName');
            $table->time('StartTime');
            $table->time('EndTime');
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
        Schema::dropIfExists('opening_times');
    }
};
