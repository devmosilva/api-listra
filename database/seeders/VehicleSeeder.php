<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            [
                'id' => 'ef9251f0-5505-11ec-8d3d-0242ac130003',
                'photo' => 'http://localhost:8484/images/vehicles/honda-civic-2019.jpg',
                'city' => 'São Paulo',
                'make' => 'Honda',
                'model' => 'Civic',
                'description' => 'This is a description of the vehicle',
                'year' => 2019,
                'mileage' => 15000,
                'transmission_type' => 'Automatic',
                'store_phone' => '555-555-1234',
                'price' => 18000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'f80e041c-5505-11ec-bce8-0242ac130003',
                'photo' => 'http://localhost:8484/images/vehicles/toyota-camry-2019.jpg',
                'city' => 'Salvador',
                'make' => 'Toyota',
                'model' => 'Camry',
                'description' => 'This is another description of a vehicle',
                'year' => 2020,
                'mileage' => 10000,
                'transmission_type' => 'Manual',
                'store_phone' => '555-555-5678',
                'price' => 22000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'ef9251f0-5505-11ec-8d3d-0242ac130004',
                'photo' => 'http://localhost:8484/images/vehicles/ford-fiesta-2018.jpg',
                'city' => 'Rio de Janeiro',
                'make' => 'Ford',
                'model' => 'Fiesta',
                'description' => 'Ford Fiesta 2018, well-maintained',
                'year' => 2018,
                'mileage' => 25000,
                'transmission_type' => 'Manual',
                'store_phone' => '555-555-5678',
                'price' => 12000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'ef9251f0-5505-11ec-8d3d-0242ac130005',
                'photo' => 'http://localhost:8484/images/vehicles/toyota-corolla-2020.jpg',
                'city' => 'Belo Horizonte',
                'make' => 'Toyota',
                'model' => 'Corolla',
                'description' => 'Toyota Corolla 2020 with low mileage',
                'year' => 2020,
                'mileage' => 10000,
                'transmission_type' => 'Automatic',
                'store_phone' => '555-555-9012',
                'price' => 25000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '46e711e8-5506-11ec-8d3d-0242ac130003',
                'photo' => 'http://localhost:8484/images/vehicles/hb20.jpg',
                'city' => 'Recife',
                'make' => 'Hyundai',
                'model' => 'HB20',
                'description' => 'This is a description of the vehicle',
                'year' => 2020,
                'mileage' => 20000,
                'transmission_type' => 'Manual',
                'store_phone' => '555-555-4321',
                'price' => 25000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
