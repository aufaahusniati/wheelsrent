<?php

namespace Database\Seeders;

use App\Models\Car;
use Database\Factories\CarFactory;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::factory()->count(20)->create();
    }
}
