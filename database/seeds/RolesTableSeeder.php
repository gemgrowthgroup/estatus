<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Administrator']);
        Role::create(['name' => 'Director']);
        Role::create(['name' => 'Manager']);
        Role::create(['name' => 'Agent']);
        Role::create(['name' => 'Driver']);
        Role::create(['name' => 'Unassigned User']);
    }
}
