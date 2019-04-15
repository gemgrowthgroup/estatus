<?php

use Faker\Generator as Faker;

$factory->define(App\Vehicle::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameMale,
        'type' => 'Sports Utility Vehicle',        
    ];
});
