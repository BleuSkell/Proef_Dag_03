<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\TypePerson;
use App\Models\Contact;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        $typePerson = TypePerson::Factory()->create([
            'Name' => 'Klant',
        ]);

        $mazinPerson = Person::factory()->create([
            'TypePerson_Id' => $typePerson->id,
            'FirstName' => 'Mazin',
            'Infix' => NULL,
            'LastName' => 'Jamil',
            'CallName' => 'Mazin',
            'IsAdult' => 1,
        ]);

        $mazinUser = User::factory()->create([
            'Person_id' => $mazinPerson->id,
            'name' => 'Mazin',
            'email' => 'm.jamil@gmail.com',
            'password' => bcrypt('Password123'),
            'IsLoggedIn' => 1,
            'LoggedInAt' => now(),
            'LoggedOut' => NULL,
        ]);

        // Create a TypePerson entry if it doesn't exist already
        $typePerson = TypePerson::firstOrCreate([
            'id' => 8, // Ensures the TypePerson with id 8 exists
            'Name' => 'Example Type Person', // Add relevant name or other attributes
            'IsActief' => true, // ✅ This avoids an error
            'Opmerking' => 'Example description',
            'DatumAangemaakt' => now(),
            'DatumGewijzigd' => now(),
        ]);

        // Seeding the Person table, ensuring that TypePerson_Id is set correctly
        $persons = Person::factory(10)->create([
            'TypePerson_Id' => $typePerson->id,  // Linking all persons to the created TypePerson
        ]);

        // Seeding the Contact table, linking contacts to persons
        $persons->each(function ($person) {
            Contact::factory(2)->create([ // Create 2 contacts per person
                'Person_id' => $person->id
            ]);
        });
        
        $this->call([
            ReservationSeeder::class,
        ]);
    }
}
