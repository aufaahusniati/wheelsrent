<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Make;
use App\Models\Car;
use App\Models\Reservation;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('password')
            ],
        ];
        foreach($userData as $key => $val) {
            User::create($val);
        };

        Make::create([
            'make_name' => 'Mazda'
        ]);

        Make::create([
            'make_name' => 'BMW'
        ]);

        Make::create([
            'make_name' => 'Honda'
        ]);

        Car::create([
            'make_id'=> '1',
            'model' => '3 5-Door 2WD',
            'year' => '2024',
            'fuel' => 'Reguler',
            'transmission' => 'Manual 6-spd',
            'price' => '35000',
            
            
        ]);
        Car::create([
            'make_id'=> '2',
            'model' => 'X3 xDrive30i',
            'year' => '2024',
            'fuel' => 'Premium',
            'transmission' => 'Automatic(S8)',
            'price' => '40000',
            
        ]);
        Car::create([
            'make_id'=> '1',
            'model' => 'Civic 5Dr',
            'year' => '2024',
            'fuel' => 'Gasoline',
            'transmission' => 'Manual 6-spd',
            'price' => '30000',
            
        ]);

        Reservation::create([
            'car_id'=> '1',
            'start_date'=> '2023/12/11',
            'end_date'=> '2023/12/16',
            'email' => 'jungkook@gmailcom',
            'name'=> 'Jungkook',
            'address' => 'Jl. Cibunti',
            'phone' => '82114667651'
        ]);
        Reservation::create([
            'car_id'=> '3',
            'start_date'=> '2023/12/20',
            'end_date'=> '2023/12/23',
            'email' => 'dapu@gmailcom',
            'name'=> 'Jaehyun',
            'address' => 'Jl. Cimahi',
            'phone' => '82122345762'
        ]);
    }
}
