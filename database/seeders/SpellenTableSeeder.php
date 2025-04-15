<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpellenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('spellen')->insert([
            ['persoon_id' => 1, 'reservering_id' => 1],
            ['persoon_id' => 2, 'reservering_id' => 2],
            ['persoon_id' => 3, 'reservering_id' => 3],
            ['persoon_id' => 4, 'reservering_id' => 5],
            ['persoon_id' => 6, 'reservering_id' => 5],
            ['persoon_id' => 7, 'reservering_id' => 5],
            ['persoon_id' => 8, 'reservering_id' => 5],
        ]);
    }
}
// database/seeders/SpellenTableSeeder.php