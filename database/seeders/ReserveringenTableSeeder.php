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
                'persoon_id' => 1,
                'opening_time_id' => 2,
                'baan_id' => 8,
                'pakket_optie_id' => 1,
                'reservering_status' => 'Bevestigd',
                'reserveringsnummer' => '2022122000001',
                'datum' => '2022-12-20',
                'aantal_uren' => 1,
                'begin_tijd' => '15:00:00',
                'eind_tijd' => '16:00:00',
                'aantal_volwassen' => 4,
                'aantal_kinderen' => 2,
            ],
            [
                'persoon_id' => 2,
                'opening_time_id' => 2,
                'baan_id' => 2,
                'pakket_optie_id' => 3,
                'reservering_status' => 'Bevestigd',
                'reserveringsnummer' => '2022122000002',
                'datum' => '2022-12-20',
                'aantal_uren' => 1,
                'begin_tijd' => '17:00:00',
                'eind_tijd' => '18:00:00',
                'aantal_volwassen' => 4,
                'aantal_kinderen' => null,
            ],
            [
                'persoon_id' => 3,
                'opening_time_id' => 7,
                'baan_id' => 3,
                'pakket_optie_id' => 1,
                'reservering_status' => 'Bevestigd',
                'reserveringsnummer' => '2022122400003',
                'datum' => '2022-12-24',
                'aantal_uren' => 2,
                'begin_tijd' => '16:00:00',
                'eind_tijd' => '18:00:00',
                'aantal_volwassen' => 4,
                'aantal_kinderen' => null,
            ],
            [
                'persoon_id' => 1,
                'opening_time_id' => 2,
                'baan_id' => 6,
                'pakket_optie_id' => null,
                'reservering_status' => 'Bevestigd',
                'reserveringsnummer' => '2022122700004',
                'datum' => '2022-12-27',
                'aantal_uren' => 2,
                'begin_tijd' => '17:00:00',
                'eind_tijd' => '19:00:00',
                'aantal_volwassen' => 2,
                'aantal_kinderen' => null,
            ],
            [
                'persoon_id' => 4,
                'opening_time_id' => 3,
                'baan_id' => 4,
                'pakket_optie_id' => 4,
                'reservering_status' => 'Bevestigd',
                'reserveringsnummer' => '2022122800005',
                'datum' => '2022-12-28',
                'aantal_uren' => 1,
                'begin_tijd' => '14:00:00',
                'eind_tijd' => '15:00:00',
                'aantal_volwassen' => 3,
                'aantal_kinderen' => null,
            ],
            [
                'persoon_id' => 5,
                'opening_time_id' => 10,
                'baan_id' => 5,
                'pakket_optie_id' => 4,
                'reservering_status' => 'Bevestigd',
                'reserveringsnummer' => '2022122800006',
                'datum' => '2022-12-28',
                'aantal_uren' => 2,
                'begin_tijd' => '19:00:00',
                'eind_tijd' => '21:00:00',
                'aantal_volwassen' => 2,
                'aantal_kinderen' => null,
            ],
        ]);
    }
}
