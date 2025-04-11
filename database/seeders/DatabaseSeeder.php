<?php

namespace Database\Seeders;

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
            'TypePeople_id' => $typePerson->id,
            'FirstName' => 'Mazin',
            'MiddleName' => NULL,
            'LastName' => 'Jamil',
            'CallName' => 'Mazin',
            'Is_Adult' => 1,
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
        
        $this->call([
            ReservationSeeder::class,
        ]);
    }
}
