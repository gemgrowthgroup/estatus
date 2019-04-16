<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Agency;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $superAdminRole = Role::where('name', 'Super')->first();
        $adminRole = Role::where('name', 'Admin')->first();
        $directorRole = Role::where('name', 'Director')->first();
        $managerRole = Role::where('name', 'Manager')->first();
        $agentRole = Role::where('name', 'Agent')->first();
        $driverRole = Role::where('name', 'Driver')->first();
        $userRole = Role::where('name', 'Unassigned User')->first();

        $agency = Agency::where('id', 1)->first();

        $superAdmin = User::create([
        	'name' => 'Glenly Pilapil',
        	'email' => 'glenly.pilapil@gmail.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('glenly123')
        ]);

        $admin = User::create([
        	'name' => 'Admin',
        	'email' => 'admin@company.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('admin123')
        ]);

        $director = User::create([
        	'name' => 'Director',
        	'email' => 'director@company.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('director123')
        ]);

        $manager = User::create([
        	'name' => 'Manager',
        	'email' => 'manager@company.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('manager123')
        ]);

        $agent = User::create([
        	'name' => 'Agent',
        	'email' => 'agent@company.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('agent123')
        ]);

        $driver = User::create([
        	'name' => 'Driver',
        	'email' => 'driver@vehicles.com',
            'email_verified_at' => now(),
        	'password' => bcrypt('driver123')
        ]);
       

        $superAdmin->roles()->attach($superAdminRole);
        $admin->roles()->attach($adminRole);
        $director->roles()->attach($directorRole);
        $manager->roles()->attach($managerRole);
        $agent->roles()->attach($agentRole);
        $driver->roles()->attach($driverRole);

        $admin->save();
        $director->save();
        $manager->save();
        $agent->save();        
        $driver->save();

        $admin->agency()->attach($agency);
        $director->agency()->attach($agency);
        $manager->agency()->attach($agency);
        $agent->agency()->attach($agency);        
        $driver->agency()->attach($agency);

        factory(App\User::class, 20)->create();
    }
}
