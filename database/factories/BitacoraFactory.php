<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bitacora>
 */
class BitacoraFactory extends Factory
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
            'bitacora' => fake()->name(),
            'fecha' => fake()->date(),
            'hora' => fake()->time(),
            'ip' => fake()->ipv6(),
            'so' => fake()->userAgent(),
            'navegador' => fake()->userAgent(),
        ];
    }
}
