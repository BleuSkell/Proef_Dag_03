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
<<<<<<< HEAD
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
=======
    {
        // Check if the user already exists before creating
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('Password123')
            ]);
        }

        // Voeg PakketOpties toe
        DB::table('pakketoptie')->insert([
            ['id' => 1, 'naam' => 'Snackpakketbasis'],
            ['id' => 2, 'naam' => 'Snackpakketluxe'],
            ['id' => 3, 'naam' => 'Kinderpartij'],
            ['id' => 4, 'naam' => 'Vrijgezellenfeest'],
        ]);

        $this->call([
            PersonenSeeder::class,
            ReserveringenTableSeeder::class,
            SpellenTableSeeder::class, 
            UitslagenSeeder::class,           
>>>>>>> feature_reserveringen
        ]);
    }
}
