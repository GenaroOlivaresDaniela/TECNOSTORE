<?php

namespace Database\Factories;

use App\Models\type_user;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class UsuarioFactory extends Factory
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
            'nombre' =>fake()->name(),
            'correo' =>fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'contraseña' =>  'sfkerngji34p593045i2594gr89g48yh44853*/',
            'img_perfil' => $this->faker->imageUrl(),

            'type_id' => type_user::all()->random()->id,
        ];
    }
}
