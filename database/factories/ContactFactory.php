<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Person_id' => $this->faker->numberBetween(1, 10), // Assuming Person IDs between 1 and 10 exist
            'Mobile' => $this->faker->phoneNumber,
            'E_mail' => $this->faker->unique()->safeEmail,
            'IsActief' => $this->faker->boolean,
            'Opmerking' => $this->faker->sentence,
            'DatumAangemaakt' => now(),
            'DatumGewijzigd' => now(),
        ];
    }
}
