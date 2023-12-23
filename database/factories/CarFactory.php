<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

class CarFactory extends Factory
{
    public function definition(): array
    {
        $response = file_get_contents('https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/all-vehicles-model@public/records?limit=20');
        $data = json_decode($response, true);

        // Assuming the structure of the data is an array of records
        $record = $data['records'][0]; // Adjust this based on the actual structure

        return [
            'brand' => $record['fields']['brand'],
            'model' => $record['fields']['model'],
            'year' => $record['fields']['year'],
            'fuel_type' => $record['fields']['fuel_type'],
        ];
    }
}
