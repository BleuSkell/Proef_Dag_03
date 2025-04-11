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
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_all_reservations_by_user_id');

        DB::unprepared('
            CREATE PROCEDURE sp_get_all_reservations_by_user_id(
                IN user_id INT
            )
            BEGIN
                SELECT
                    r.id
                    ,r.Person_id
                    ,r.OpeningTime_id
                    ,r.Lane_id
                    ,r.ReservationStatus
                    ,r.ReservationNumber
                    ,r.Date
                    ,r.TotalHours
                    ,r.StartTime
                    ,r.EndTime
                    ,r.AdultsAmount
                    ,r.ChildrenAmount
                    ,p.id
                    ,u.Person_id AS UserPerson_id
                FROM 
                    reservations AS r
                INNER JOIN people AS p 
                    ON r.Person_id = p.id
                INNER JOIN users AS u
                    ON u.Person_id = p.id
                WHERE
                    u.id = user_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
