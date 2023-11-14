<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class teacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'name'=> $this->faker->firstName(),
          'titles'=> $this->faker->word(2),
          'img'=>  $this->faker->imageUrl(360,360,'animals',true),
        ];
    }
}
