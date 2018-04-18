<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    $email = $faker->unique()->safeEmail;
    $prefix = strstr($email, '@', true);
    $surffix = strstr($email, '@');
    $email = $prefix . rand(1, 99999999) . $surffix;
    return [
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'email'          => $email,
        'dob'            => date('Y-m-d', rand(strtotime('1990-01-01'), strtotime('2000-12-01'))),
        'address'        => $faker->city,
        'gender'         => rand(1, 2),
        'remember_token' => str_random(10),
        'created_at'     => date('Y-m-d'),
        'updated_at'     => date('Y-m-d')
    ];
});

