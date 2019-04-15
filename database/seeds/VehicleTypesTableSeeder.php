<?php

use Illuminate\Database\Seeder;
use App\VehicleType;

class VehicleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleType::truncate();

        VehicleType::create(['name' => 'SUV']);
        VehicleType::create(['name' => 'Shuttle Van']);
        VehicleType::create(['name' => 'Luxury Car']);
        VehicleType::create(['name' => 'Helicopter']);
    }
}
