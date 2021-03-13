<?php

namespace Database\Seeders;

use App\Models\Juego;
use Illuminate\Database\Seeder;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $juego = new Juego();
        $juego->name = "Ruleta";
        $juego->save();

        $juego2 = new Juego();
        $juego2->name = "Traga Perras";
        $juego2->save();

        $juego3 = new Juego();
        $juego3->name = "Memoria";
        $juego3->save();
    }
}
