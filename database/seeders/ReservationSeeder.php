<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typePeople = DB::table('type_people')->insert([
            ['Name' => 'Klant', 'Is_Active' => 1],
            ['Name' => 'Medewerker', 'Is_Active' => 1],
            ['Name' => 'Gast', 'Is_Active' => 1],
        ]);

        $people = DB::table('people')->insert([
            ['TypePeople_id' => 1, 'FirstName' => 'Mazin', 'MiddleName' => null, 'LastName' => 'Jamil', 'CallName' => 'Mazin', 'Is_Adult' => 1, 'Is_Active' => 1],
            ['TypePeople_id' => 1, 'FirstName' => 'Arjan', 'MiddleName' => 'de', 'LastName' => 'Ruijter', 'CallName' => 'Arjan', 'Is_Adult' => 1, 'Is_Active' => 1],
            ['TypePeople_id' => 1, 'FirstName' => 'Hans', 'MiddleName' => null, 'LastName' => 'Odijk', 'CallName' => 'Hans', 'Is_Adult' => 1, 'Is_Active' => 1],
            ['TypePeople_id' => 1, 'FirstName' => 'Dennis', 'MiddleName' => 'van', 'LastName' => 'Wakeren', 'CallName' => 'Dennis', 'Is_Adult' => 1, 'Is_Active' => 1],
            ['TypePeople_id' => 2, 'FirstName' => 'Wilco', 'MiddleName' => 'van de', 'LastName' => 'Grift', 'CallName' => 'Wilco', 'Is_Adult' => 1, 'Is_Active' => 1],
            ['TypePeople_id' => 3, 'FirstName' => 'Tom', 'MiddleName' => null, 'LastName' => 'Sanders', 'CallName' => 'Tom', 'Is_Adult' => 0, 'Is_Active' => 1],
            ['TypePeople_id' => 3, 'FirstName' => 'Andrew', 'MiddleName' => null, 'LastName' => 'Sanders', 'CallName' => 'Andrew', 'Is_Adult' => 0, 'Is_Active' => 1],
            ['TypePeople_id' => 3, 'FirstName' => 'Julian', 'MiddleName' => null, 'LastName' => 'Kaldenheuvel', 'CallName' => 'Julian', 'Is_Adult' => 1, 'Is_Active' => 1],
        ]);

        $openingTime = DB::table('opening_times')->insert([
            ['DayName' => 'maandag', 'StartTime' => '14:00:00', 'EndTime' => '22:00:00', 'Is_Active' => 1],
            ['DayName' => 'dinsdag', 'StartTime' => '14:00:00', 'EndTime' => '22:00:00', 'Is_Active' => 1],
            ['DayName' => 'woensdag', 'StartTime' => '14:00:00', 'EndTime' => '22:00:00', 'Is_Active' => 1],
            ['DayName' => 'donderdag', 'StartTime' => '14:00:00', 'EndTime' => '22:00:00', 'Is_Active' => 1],
            ['DayName' => 'Vrijdagmiddag', 'StartTime' => '14:00:00', 'EndTime' => '18:00:00', 'Is_Active' => 1],
            ['DayName' => 'Vrijdagavond', 'StartTime' => '18:00:00', 'EndTime' => '24:00:00', 'Is_Active' => 1],
            ['DayName' => 'Zaterdagmiddag', 'StartTime' => '14:00:00', 'EndTime' => '18:00:00', 'Is_Active' => 1],
            ['DayName' => 'Zaterdagavond', 'StartTime' => '18:00:00', 'EndTime' => '24:00:00', 'Is_Active' => 1],
            ['DayName' => 'Zondagagmiddag', 'StartTime' => '14:00:00', 'EndTime' => '18:00:00', 'Is_Active' => 1],
            ['DayName' => 'Zondagagavond', 'StartTime' => '18:00:00', 'EndTime' => '24:00:00', 'Is_Active' => 1],
        ]);

        $lane = DB::table('lanes')->insert([
            ['Number' => 1, 'HasFence' => 0, 'Is_Active' => 1],
            ['Number' => 2, 'HasFence' => 0, 'Is_Active' => 1],
            ['Number' => 3, 'HasFence' => 0, 'Is_Active' => 1],
            ['Number' => 4, 'HasFence' => 0, 'Is_Active' => 1],
            ['Number' => 5, 'HasFence' => 0, 'Is_Active' => 1],
            ['Number' => 6, 'HasFence' => 0, 'Is_Active' => 1],
            ['Number' => 7, 'HasFence' => 1, 'Is_Active' => 1],
            ['Number' => 8, 'HasFence' => 1, 'Is_Active' => 1],
        ]);

        $packageOption = DB::table('package_options')->insert([
            ['Name' => 'Snackpakketbasis', 'Is_Active' => 1],
            ['Name' => 'Snackpakketluxe', 'Is_Active' => 1],
            ['Name' => 'Kinderpartij', 'Is_Active' => 1],
            ['Name' => 'Vrijgezellenfeest', 'Is_Active' => 1],
        ]);

        $reservation = DB::table('reservations')->insert([
            ['Person_id' => 1, 'OpeningTime_id' => 2, 'Lane_id' => 8, 'PackageOption_id' => 1, 'ReservationStatus' => 'Bevestigd', 'ReservationNumber' => 2022122000001, 'Date' => '2022-12-20', 'TotalHours' => 1, 'StartTime' => '15:00:00', 'EndTime' => '16:00:00', 'AdultsAmount' => 4, 'ChildrenAmount' => 2],
            ['Person_id' => 2, 'OpeningTime_id' => 2, 'Lane_id' => 2, 'PackageOption_id' => 3, 'ReservationStatus' => 'Bevestigd', 'ReservationNumber' => 2022122000002, 'Date' => '2022-12-20', 'TotalHours' => 1, 'StartTime' => '17:00:00', 'EndTime' => '18:00:00', 'AdultsAmount' => 4, 'ChildrenAmount' => null],
            ['Person_id' => 3, 'OpeningTime_id' => 7, 'Lane_id' => 3, 'PackageOption_id' => 1, 'ReservationStatus' => 'Bevestigd', 'ReservationNumber' => 2022122400003, 'Date' => '2022-12-24', 'TotalHours' => 2, 'StartTime' => '16:00:00', 'EndTime' => '18:00:00', 'AdultsAmount' => 4, 'ChildrenAmount' => null],
            ['Person_id' => 1, 'OpeningTime_id' => 2, 'Lane_id' => 6, 'PackageOption_id' => null, 'ReservationStatus' => 'Bevestigd', 'ReservationNumber' => 2022122700004, 'Date' => '2022-12-27', 'TotalHours' => 2, 'StartTime' => '17:00:00', 'EndTime' => '19:00:00', 'AdultsAmount' => 2, 'ChildrenAmount' => null],
            ['Person_id' => 4, 'OpeningTime_id' => 3, 'Lane_id' => 4, 'PackageOption_id' => 4, 'ReservationStatus' => 'Bevestigd', 'ReservationNumber' => 2022122800005, 'Date' => '2022-12-28', 'TotalHours' => 1, 'StartTime' => '14:00:00', 'EndTime' => '15:00:00', 'AdultsAmount' => 3, 'ChildrenAmount' => null],
            ['Person_id' => 5, 'OpeningTime_id' => 10, 'Lane_id' => 5, 'PackageOption_id' => 4, 'ReservationStatus' => 'Bevestigd', 'ReservationNumber' => 2022122800006, 'Date' => '2022-12-28', 'TotalHours' => 2, 'StartTime' => '19:00:00', 'EndTime' => '21:00:00', 'AdultsAmount' => 2, 'ChildrenAmount' => null],
        ]);        
    }
}
