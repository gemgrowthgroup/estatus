<?php

use App\User;
use App\Role;
use App\Agency;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


// $factory->afterCreating(User::class, function ($user, $faker){
// 	$roles = Role::where('name', 'Administrator')->get();
// 	$user->roles()->sync($roles->pluck('id')->toArray());
// });

// $factory->afterCreating(User::class, function ($user, $faker){
// 	$roles = Role::where('name', 'Director')->get();
// 	$user->roles()->sync($roles->pluck('id')->toArray());
// });

// $factory->afterCreating(User::class, function ($user, $faker){
// 	$roles = Role::where('name', 'Manager')->get();
// 	$user->roles()->sync($roles->pluck('id')->toArray());
// });

$factory->afterCreating(User::class, function ($user, $faker){
	$roles = Role::where('name', 'Agent')->get();
	$user->roles()->sync($roles->pluck('id')->toArray());
	$agencies = Agency::where('id', 1)->get();
	$user->agency()->sync($agencies->pluck('id')->toArray());
});

// $factory->afterCreating(User::class, function ($user, $faker){
// 	$roles = Role::where('name', 'Unassigned User')->get();
// 	$user->roles()->sync($roles->pluck('id')->toArray());
// });