<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
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
            'usuario' => fake()->userName(),
            'clave' => fake()->password(),
            'habilitado' => fake()->boolean(),
            'fecha' => fake()->date(),
             // 'id_rol' => rand(1,10),
            // 'id_persona' => rand(1,10),
        ];
    }
}
