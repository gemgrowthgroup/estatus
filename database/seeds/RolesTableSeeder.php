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
        DB::table('role_user')->truncate();
        DB::table('agency_user')->truncate();
        \App\Role::truncate();
        \App\User::truncate();
        \App\Profile::truncate();

        $super = \App\Role::create(['name' => 'Super']);
        $admin = \App\Role::create(['name' => 'Admin']);
        $director = \App\Role::create(['name' => 'Director']);
        $manager = \App\Role::create(['name' => 'Manager']);
        $agent = \App\Role::create(['name' => 'Agent']);
        $driver = \App\Role::create(['name' => 'Driver']);

        $super->users()->create([
            'name' => 'Glenly Pilapil',
            'email' => 'glenly.pilapil@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('glenly123'),
        ]);

        $super->users()->first()->profile()->create([
            'name' => $super->users()->first()->name,
            'email' => $super->users()->first()->email,
        ]);

        $admin->users()->create([
            'name' => 'Ray Carl Loseo',
            'email' => 'admin@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
        ]);

        $user = \App\User::where('id', 2)->first();
        $user->profile()->create([
            'name' => $user->name, 
            'email' => $user->email,
        ]);

        $admin->users()->create([
            'name' => 'Dan Tristan Bonbon',
            'email' => 'admin2@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
        ]);

        $user = \App\User::where('id', 3)->first();
        $user->profile()->create([
            'name' => $user->name,
            'email' => $user->email,
        ]);

        $admin->users()->create([
            'name' => 'Stephen Samonte',
            'email' => 'admin3@company.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
        ]);

        $user = \App\User::where('id', 4)->first();
        $user->profile()->create([
            'name' => $user->name,
            'email' => $user->email,
        ]);
        

    }
}
