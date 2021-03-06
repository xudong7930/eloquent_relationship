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


$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'city' => $faker->city,
        'about' => $faker->paragraph(random_int(3, 5)),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {

    return [
        'user_id' => App\User::all()->random()->id,
        'title' => $faker->sentence,
        'content' => $faker->paragraph(random_int(3, 6)),
    ];
});


$factory->define(App\Website::class, function (Faker\Generator $faker) {

    return [
        'url' => $faker->url,
    ];
});