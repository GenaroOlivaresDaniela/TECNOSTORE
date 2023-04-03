<?php

namespace Database\Factories;

use App\Models\produccion;
use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productoproduccione>
 */
class ProductoproduccioneFactory extends Factory
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
            'fecha' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'hora' => fake()->time($format = 'H:i:s', $max = 'now'),
            'cantidad' => fake()->randomDigit(1,1000),
            
            'producto_id' => producto::all()->random()->id,
            'produccion_id' => produccion::all()->random()->id
        ];
    }
}
