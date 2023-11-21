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
            'nombre' => $this->faker->word(),
            'descripcion'=> $this->faker->sentence(6),
            'lugar'=>  $this->faker->sentence(3),
            'precio'=> $this->faker->randomFloat(2, 10, 100),
            'imagen'=>  $this->faker->imageUrl(640, 480, 'animals', true),
            'valoracion'=> $this->faker->numberBetween(1,5),
            'comentarios'=> $this->faker->paragraph(2),
        ];
    }
}
