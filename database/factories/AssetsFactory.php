<?php

use Faker\Generator as Faker;

$factory->define(\App\Asset::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'plate' => strtoupper(str_random(6)),
    ];
});

// $factory->afterCreating(\App\Asset::class, function ($asset, $faker){
// 	$vehicle = \App\Vehicle::where('name', 'Driver')->get();
// 	$user->roles()->sync($roles->pluck('id')->toArray());
// 	$agencies = Agency::where('id', 1)->get();
// 	$user->agency()->sync($agencies->pluck('id')->toArray());
// });