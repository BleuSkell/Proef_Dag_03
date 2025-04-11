<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TypePerson;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'TypePerson_Id' => TypePerson::factory(), // auto-creates one if needed
            'FirstName' => $this->faker->firstName,
            'Infix' => $this->faker->optional()->word,
            'LastName' => $this->faker->lastName,
            'CallName' => $this->faker->name,
            'IsAdult' => $this->faker->boolean,
            'IsActief' => $this->faker->boolean,
            'Opmerking' => $this->faker->sentence,
            'DatumAangemaakt' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'DatumGewijzigd' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
