<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();

        Status::create(['name' => 'Pending Approval']);
        Status::create(['name' => 'Approved']);
        Status::create(['name' => 'Vehicle Assigned']);
        Status::create(['name' => 'Vehicle Deployed']);
        Status::create(['name' => 'Awaiting Return']);
        Status::create(['name' => 'Vehicle Returned']);
        Status::create(['name' => 'Completed']);
        Status::create(['name' => 'Cancelled']);
        Status::create(['name' => 'Denied']);
        
    }
}
