<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\TypePerson;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        $typePerson = TypePerson::Factory()->create([
            'Name' => 'Klant',
            'DatumAangemaakt' => now(),
            'DatumGewijzigd' => now(),
        ]);

        $mazinPerson = Person::factory()->create([
            'TypePerson_Id' => $typePerson->id,
            'FirstName' => 'Mazin',
            'Infix' => NULL,
            'LastName' => 'Jamil',
            'CallName' => 'Mazin',
            'IsAdult' => 1,
            'DatumAangemaakt' => now(),
            'DatumGewijzigd' => now(),
        ]);

        $mazinContact = Contact::factory()->create([
            'Person_id' => $mazinPerson->id,
            'Mobile' => '0612365478',
            'E_mail' => 'm.jamil@gmail.com',
            'IsActief' => 1,
            'DatumAangemaakt' => now(),
            'DatumGewijzigd' => now(),
        ]);

        $mazinUser = User::factory()->create([
            'Person_id' => $mazinPerson->id,
            'name' => 'Mazin',
            'email' => 'm.jamil@gmail.com',
            'password' => bcrypt('Password123'),
            'IsLoggedIn' => 1,
            'LoggedInAt' => now(),
            'LoggedOut' => NULL,
            'CreatedAt' => now(),
            'UpdatedAt' => now(),
        ]);
    }
}
