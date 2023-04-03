<?php

namespace Database\Factories;

use App\Models\empresa;
use App\Models\type_maquina;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\maquina>
 */
class MaquinaFactory extends Factory
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
            'nombrem' => fake()->randomElement(['n34dwae00','lk35fgp5']),

            'empresa_id' => empresa::all()->random()->id,
            'tipom_id' => type_maquina::all()->random()->id
        ];
    }
}
