<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // Agrego datos a la BD por defecto
        $this->call(UserSeeder::class);
        $this->call(JuegoSeeder::class);
    }
}
