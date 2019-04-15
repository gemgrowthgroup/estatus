<?php

use Illuminate\Database\Seeder;
use App\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::truncate();

        Vehicle::create([
        	'name' => 'Ford Everest',
        	'type' => 'Sports Utility Vehicle',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Nissan X-Trail',
        	'type' => 'Sports Utility Vehicle',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Toyota Fortuner',
        	'type' => 'Sports Utility Vehicle',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Toyota Innova',
        	'type' => 'Sports Utility Vehicle',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Mitsubishi Pajero',
        	'type' => 'Sports Utility Vehicle',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Montero Sport',
        	'type' => 'Sports Utility Vehicle',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Nissan H350',
        	'type' => 'Shuttle Van',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Hyundai Starex',
        	'type' => 'Shuttle Van',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Hyundai 350',
        	'type' => 'Shuttle Van',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        Vehicle::create([
        	'name' => 'Toyota Hiace',
        	'type' => 'Shuttle Van',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);
    }
}
