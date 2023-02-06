<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            [
                'name' => 'aprender laravel',
                'description' => 'leer documentacion sobre laravel',
                'is_completed' => true
            ],
            [
                'name' => 'crear una api',
                'description' => 'Crear una api sencilla en laravel',
                'is_completed' => true
            ],
            [
                'name' => 'crear el frontend para usar la api',
                'description' => 'elaborar el frontend',
                'is_completed' => true
            ],
            [
                'name' => 'solicitar review del proyecto',
                'description' => 'agregar un colaborador que revise tu codigo y te de feedback',
                'is_completed' => true
            ]
        ]);
    }
}
