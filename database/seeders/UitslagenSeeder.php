<?php
// database/seeders/UitslagenSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UitslagenSeeder extends Seeder
{
    public function run()
    {
        DB::table('uitslagen')->insert([
            ['reservering_id' => 1, 'aantalpunten' => 290],
            ['reservering_id' => 2, 'aantalpunten' => 300],
            ['reservering_id' => 3, 'aantalpunten' => 120],
            ['reservering_id' => 4, 'aantalpunten' => 34],
            ['reservering_id' => 5, 'aantalpunten' => null],
            ['reservering_id' => 6, 'aantalpunten' => 234],
            ['reservering_id' => 7, 'aantalpunten' => 299],
        ]);
    }
}
