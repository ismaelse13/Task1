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
        'disciplina_id' => $faker->randomNumber(5),
        'aluno_id' => $faker->randomNumber(5),

        'prova_1'=> $faker->randomFloat(2, 0, 10),
        'prova_2' => $faker->randomFloat(2, 0, 10),
        'prova_3' => $faker->randomFloat(2, 0, 10),
        'prova_4' => $faker->randomFloat(2, 0, 10),

        'prova_rec' => $faker->randomFloat(2, 0, 10),
        'media_final' => $faker->randomFloat(2, 0, 10),
    ];
});