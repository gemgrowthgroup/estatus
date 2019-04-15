<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Agency;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::truncate();
        DB::table('agency_user')->truncate();
        

        factory(App\Agency::class, 5)->create();
    }
}
