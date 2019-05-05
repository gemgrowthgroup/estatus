<?php

use Faker\Generator as Faker;

$factory->define(\App\User::class, function (Faker $faker) {
    return [

        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->afterCreating(User::class, function ($user, $faker){
	$roles = Role::where('name', 'Agent')->get();
	$user->roles()->sync($roles->pluck('id')->toArray());
	$agencies = Agency::where('id', 1)->get();
	$user->agency()->sync($agencies->pluck('id')->toArray());
});
