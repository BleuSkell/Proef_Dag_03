<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonenSeeder extends Seeder
{
    public function run()
    {
        DB::table('personen')->insert([
            ['type_persoon' => 'Klant', 'voornaam' => 'Mazin', 'tussenvoegsel' => null, 'achternaam' => 'Jamil', 'roepnaam' => 'Mazin', 'is_volwassen' => 1],
            ['type_persoon' => 'Klant', 'voornaam' => 'Arjan', 'tussenvoegsel' => 'de', 'achternaam' => 'Ruijter', 'roepnaam' => 'Arjan', 'is_volwassen' => 1],
            ['type_persoon' => 'Klant', 'voornaam' => 'Hans', 'tussenvoegsel' => null, 'achternaam' => 'Odijk', 'roepnaam' => 'Hans', 'is_volwassen' => 1],
            ['type_persoon' => 'Klant', 'voornaam' => 'Dennis', 'tussenvoegsel' => 'van', 'achternaam' => 'Wakeren', 'roepnaam' => 'Dennis', 'is_volwassen' => 1],
            ['type_persoon' => 'Medewerker', 'voornaam' => 'Wilco', 'tussenvoegsel' => null, 'achternaam' => 'Van de Grift', 'roepnaam' => 'Wilco', 'is_volwassen' => 1],
            ['type_persoon' => 'Gast', 'voornaam' => 'Tom', 'tussenvoegsel' => null, 'achternaam' => 'Sanders', 'roepnaam' => 'Tom', 'is_volwassen' => 0],
            ['type_persoon' => 'Gast', 'voornaam' => 'Andrew', 'tussenvoegsel' => null, 'achternaam' => 'Sanders', 'roepnaam' => 'Andrew', 'is_volwassen' => 0],
            ['type_persoon' => 'Gast', 'voornaam' => 'Julian', 'tussenvoegsel' => null, 'achternaam' => 'Kaldenheuvel', 'roepnaam' => 'Julian', 'is_volwassen' => 1],
        ]);
    }
}
