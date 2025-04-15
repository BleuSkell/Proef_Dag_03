<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReserveringenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reserveringen')->insert([
            [
                'id' => 1,
                'persoon_id' => 1,
                'pakketoptie_id' => 1,
                'datum' => '2022-12-20',
                'aantal_volwassenen' => 4,
                'aantal_kinderen' =>  2,
                'begintijd' => '15:00',
                'eindtijd' => '16:00',
            ],
            [
                'id' => 2,
                'persoon_id' => 2,
                'pakketoptie_id' => 2,
                'datum' => '2022-12-20',
                'aantal_volwassenen' => 4,
                'aantal_kinderen' =>  4,
                'begintijd' => '17:00',
                'eindtijd' => '18:00',
            ],
            [
                'id' => 3,
                'persoon_id' => 3,
                'pakketoptie_id' => 3,
                'datum' => '2022-12-24',
                'aantal_volwassenen' => 4,
                'aantal_kinderen' =>  4,
                'begintijd' => '16:00',
                'eindtijd' => '18:00',
            ],
            [
                'id' => 4,
                'persoon_id' => 1,
                'pakketoptie_id' => 4,
                'datum' => '2022-12-27',
                'aantal_volwassenen' => 2,
                'aantal_kinderen' =>  4,
                'begintijd' => '17:00',
                'eindtijd' => '19:00',
            ],
            [
                'id' => 5,
                'persoon_id' => 4,
                'pakketoptie_id' => 4,
                'datum' => '2022-12-28',
                'aantal_volwassenen' => 3,
                'aantal_kinderen' =>  4,
                'begintijd' => '14:00',
                'eindtijd' => '15:00',
            ],
            [
                'id' => 6,
                'persoon_id' => 5,
                'pakketoptie_id' => 3,
                'datum' => '2022-12-28',
                'aantal_volwassenen' => 2,
                'aantal_kinderen' =>  4,
                'begintijd' => '19:00',
                'eindtijd' => '21:00',
            ],
            [
                'id' => 7,
                'persoon_id' => 1,
                'pakketoptie_id' => 4,
                'datum' => '2022-12-29',
                'aantal_volwassenen' => 4,
                'aantal_kinderen' =>  4,
                'begintijd' => '15:00',
                'eindtijd' => '16:00',
            ],
        ]);
    }
}
