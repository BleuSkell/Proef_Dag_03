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
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_reservation_by_id');

        DB::unprepared('
            CREATE PROCEDURE sp_get_reservation_by_id(
                IN reservation_id INT
            )
            BEGIN
                SELECT
                    r.id AS Reservation_id
                    ,r.Person_id AS ReservationPerson_id
                    ,r.OpeningTime_id AS ReservationOpeningTime_id
                    ,r.Lane_id AS ReservationLane_id
                    ,r.Date
                    ,r.AdultsAmount
                    ,r.ChildrenAmount
                    ,p.id AS Person_id
                    ,p.CallName
                    ,u.Person_id AS UserPerson_id
                FROM 
                    reservations AS r
                LEFT JOIN people AS p 
                    ON r.Person_id = p.id
                LEFT JOIN users AS u
                    ON u.Person_id = p.id
                WHERE
                    r.id = reservation_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_get_reservation_by_id');
    }
};