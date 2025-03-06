<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PlanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planes')->insert([
            [
                'imagen' => 'https://drive.google.com/file/d/1ECc7xdiiSo7MGYTvlejJKuChFMpNj1FI/view?usp=drive_link',
                'nombre' => 'Ganancia Muscular',
                'descripcion' => 'Aumenta la masa muscular con entrenamiento de fuerza y superávit calórico.',
                'duracion' => 12,
                'precio' => 34.99
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1rd6I3XJF8117GYf1k3SUO-Jpz3XRG0mb/view?usp=drive_link',
                'nombre' => 'Definición',
                'descripcion' => 'Reduce grasa corporal manteniendo masa muscular con entrenamiento de fuerza e HIIT.',
                'duracion' => 8,
                'precio' => 34.99
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1jfA0jSZsr9NJj7gBBDZv7ukRupKPYwMj/view?usp=drive_link',
                'nombre' => 'Pérdida de Peso',
                'descripcion' => 'Programa de fuerza y cardio para maximizar la quema de grasa.',
                'duracion' => 10,
                'precio' => 34.99
            ],
            [
                'imagen' => 'https://drive.google.com/file/d/1V3RzujW8SXPKT_nKIYiw_Ee8GpjZF451/view?usp=drive_link',
                'nombre' => 'Ejercicios Cardiovasculares',
                'descripcion' => 'Mejora la resistencia y quema calorías con sesiones de cardio variadas.',
                'duracion' => 6,
                'precio' => 34.99
            ]
        ]);
    }
}
