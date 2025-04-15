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
            ['spel_id' => 1, 'aantalpunten' => 290],
            ['spel_id' => 2, 'aantalpunten' => 300],
            ['spel_id' => 3, 'aantalpunten' => 120],
            ['spel_id' => 4, 'aantalpunten' => 34],
            ['spel_id' => 5, 'aantalpunten' => null],
            ['spel_id' => 6, 'aantalpunten' => 234],
            ['spel_id' => 7, 'aantalpunten' => 299],
        ]);
    }
}
