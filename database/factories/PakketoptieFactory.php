<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pakketoptie>
 */
class PakketoptieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naam' => endum(['Snackpakketbasis', 'Snackpakketluxe', 'Kinderpartij', 'Vrijgezellenfeest']),
        ];
    }
}
