<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return[
                'name' => $this->faker->word(),
                'apellidos' => $this->faker->word(2),
                'dni' => $this->faker->randomNumber(9, false),
                'fecha_nacimiento' => $this->faker->date(),
                'id_doctor' => $this->faker->randomNumber(4, false),
                'vacunado' => $this->faker->boolean(),
            ];
    }
}
