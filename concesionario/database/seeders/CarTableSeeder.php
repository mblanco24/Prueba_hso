<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'año' => '2022',
            'color' => 'Azul',
            'precio' => '25000000',
            'kilometraje' => '100000',
        ]);
    }
}
