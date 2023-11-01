<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $pagina = new PaginaSeeder();
        $pagina->run();

        $persona = new PersonaSeeder();
        $persona->run();

        $rol = new RolSeeder();
        $rol->run();

        $enlace = new EnlaceSeeder();
        $enlace->run();

        $usuario = new UsuarioSeeder();
        $usuario->run();

        $bitacora = new BitacoraSeeder();
        $bitacora->run();
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
