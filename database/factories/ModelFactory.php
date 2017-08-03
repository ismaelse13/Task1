<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Nota::class, function (Faker\Generator $faker) {

    return [
        'matricula' => $faker->randomNumber(5),
        '1_av'=> $faker->randomFloat(2, 0, 10),
        '2_av' => $faker->randomFloat(2, 0, 10),
        '3_av' => $faker->randomFloat(2, 0, 10),
        '4_av' => $faker->randomFloat(2, 0, 10),

        'm1_1s'=> $faker->randomFloat(2, 0, 10),
        'r_1s'=> $faker->randomFloat(2, 0, 10),
        'm2_1s'=> $faker->randomFloat(2, 0, 10),
        
        'm1_2s'=> $faker->randomFloat(2, 0, 10),
        'r_2s'=> $faker->randomFloat(2, 0, 10),
        'm2_2s'=> $faker->randomFloat(2, 0, 10),

        'm_a'=> $faker->randomFloat(2, 0, 10),
        'p_f'=> $faker->randomFloat(2, 0, 10),
        'm_f'=> $faker->randomFloat(2, 0, 10)
    ];
});