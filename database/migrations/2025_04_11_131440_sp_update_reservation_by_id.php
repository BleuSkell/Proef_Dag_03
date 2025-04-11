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
                IN reservation_id INT,
                IN new_date DATE,
                IN new_adults INT,
                IN new_children INT
            )
            BEGIN
                UPDATE reservations
                SET
                    Date = new_date,
                    AdultsAmount = new_adults,
                    ChildrenAmount = new_children
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
