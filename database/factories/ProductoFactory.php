<?php

namespace Database\Factories;

use App\Models\categoria;
use App\Models\empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombrep' => fake()->randomElement(['stich','among us','girasol', 'pug','caballito de madera']),
            'imagen' => $this->faker->imageUrl(),

            'empresa_id' => empresa::all()->random()->id,
            'categ_id' => categoria::all()->random()->id,

        ];
    }
}
