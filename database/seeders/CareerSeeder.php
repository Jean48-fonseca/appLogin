<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $careers = [
            'Ingeniería de Software',
            'Ingeniería de Sistemas',
            'Redes y Comunicaciones',
            'Ciencias de la Computación',
            'Contaduría Pública',
            'Inteligencia Artificial'
        ];
        foreach ($careers as $career) {
            Career::create([
                'name' => $career
            ]);
        }
    }
}
