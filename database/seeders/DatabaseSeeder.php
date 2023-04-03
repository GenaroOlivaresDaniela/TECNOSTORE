<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\categoria;
use App\Models\empresa;
use App\Models\maquina;
use App\Models\type_user;
use App\Models\usuario;
use App\Models\type_maquina;
use App\Models\subcategoria;
use App\Models\producto;
use App\Models\produccion;
use App\Models\productoproduccione;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        type_user::factory(10)->create();
        usuario::factory(10)->create();
        empresa::factory(10)->create();
        subcategoria::factory(10)->create();
        categoria::factory(10)->create();
        type_maquina::factory(10)->create();
        maquina::factory(10)->create();
        producto::factory(10)->create();
        produccion::factory(10)->create();
        productoproduccione::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
