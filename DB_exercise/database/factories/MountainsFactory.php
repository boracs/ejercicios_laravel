<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mountains>
 */
class MountainsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $continentes= ['Afrika', 'Asia', 'Europe', 'America', 'Oceania'];
        return [
            'name' => $this->faker->word(),
            'height' => $this->faker->randomFloat(2, 500, 10000),
            'belongsToRange'=>$this->faker->boolean(),
            'firstClimbDate'=>$this->faker->date(),
            'continent'=>$this->faker->randomElement($continentes)
        ];
    }
}
