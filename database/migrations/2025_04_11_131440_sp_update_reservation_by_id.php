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
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_reservation_by_id');

        DB::unprepared('
            CREATE PROCEDURE sp_update_reservation_by_id(
                IN reservation_id INT
                ,IN new_lane_id INT
                ,IN new_package_option_id INT
            )
            BEGIN
                UPDATE reservations
                SET
                    Lane_id = new_lane_id
                    ,PackageOption_id = new_package_option_id
                WHERE id = reservation_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_update_reservation_by_id');
    }
};
