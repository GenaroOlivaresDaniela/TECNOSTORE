<?php

namespace Database\Factories;

use App\Models\categoria;
use App\Models\empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categoria>
 */
class CategoriaFactory extends Factory
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
            'nombrec' => fake()->randomElement(['animales', 'videojuegos', 'plantas']),
            
            'categ_id' => categoria::all()->random()->id,
            'empresa_id' => empresa::all()->random()->id,
        ];
    }
}
