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
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_lanes');

        DB::unprepared('
            CREATE PROCEDURE sp_get_all_lanes()
            BEGIN
                SELECT 
                    Id
                    ,Number
                    ,HasFence
                FROM lanes;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_lanes');
    }
};
