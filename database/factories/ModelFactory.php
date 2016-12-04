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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->freeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'fecha_de_nacimiento' => $faker->date,
        'genero' => $faker->randomElement($array = array ('M','F')),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 28),
        'post_text' => $faker->text($maxNbChars = 200) ,
        'group_id' => $faker->randomElement($array = array ('1','2','3','4','5','6')),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];


});
