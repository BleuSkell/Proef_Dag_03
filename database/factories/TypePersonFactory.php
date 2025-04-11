<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypePerson>
 */
class TypePersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
<<<<<<< HEAD
            'Name' => $this->faker->word,
            'IsActief' => $this->faker->boolean,
            'Opmerking' => $this->faker->sentence,
            'DatumAangemaakt' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'DatumGewijzigd' => $this->faker->dateTimeBetween('-1 year', 'now'),
=======
            //
>>>>>>> feature-ReserveringBeheren
        ];
    }
}
