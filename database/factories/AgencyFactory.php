<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Agency::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'about' => $faker->paragraph,
        'logo' => '/images/agencies/default.jpg',
        'established' => $faker->year,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'email' => $faker->companyEmail,
        'website' => $faker->domainName,
        'fb_page' => 'www.facebook.com/'.$faker->slug,
    ];
});
