<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ActivitieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name'=> $this->faker->word(),
            'description'=> $this->faker->word(30),
            'fecha' => $this->faker->date(),
            'price' => $this->faker->randomDigit(),
      
        ];
    }
}
