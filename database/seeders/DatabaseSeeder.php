<?php

namespace Database\Seeders;

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
        ]);
    }
}
