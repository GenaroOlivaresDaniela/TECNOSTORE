<?php

namespace Database\Factories;

use App\Models\maquina;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produccion>
 */
class ProduccionFactory extends Factory
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
            'nombrepr' => fake()->randomElement(['fgt24','ht123']),
            'dia' => fake()->randomElement(['lunes','martes','miercoles','jueves','viernes','sabado']),
            'fecha_inicio' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'fecha_final' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'total_produccion' => fake()->randomDigit(1,1000),

            'maquina_id' => maquina::all()->random()->id,
        ];
    }
}
