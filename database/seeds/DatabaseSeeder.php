<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AgenciesTableSeeder::class);  
        $this->call(RolesTableSeeder::class);              
        $this->call(UsersTableSeeder::class);
        // $this->call(ProfilesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(VehicleTypesTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        // $this->call(AssetsTableSeeder::class);
    }
}
