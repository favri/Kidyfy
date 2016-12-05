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
        'password' => $password ?: $password = bcrypt('123456'),
        'fecha_de_nacimiento' => $faker->date,
        'genero' => $faker->randomElement($array = array ('M','F')),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 25),
        'post_text' => $faker->text($maxNbChars = 200) ,
        'group_id' => $faker->randomElement($array = array ('1','2','3','4','5','6')),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];


});
$factory->define(App\UserSecondarie::class, function (Faker\Generator $faker) {

    return [
        'hijos' => $faker->numberBetween($min = 0, $max = 5),
        'obrasocial' => $faker->randomElement($array = array ('OSDE','MEDICUS','GALENO','SWISS MEDICAL','ACCORD SALUD','ITALIANO')),
        'group_id' => $faker->numberBetween($min = 2, $max = 6),
        'doctor_id' => $faker->unique()->randomFloat($nbMaxDecimals = 0, $min = 1, $max = 25),
        'user_id' => $faker->unique()->numberBetween($min = 1, $max = 25),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];


});

$factory->define(App\Doctor::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->freeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'fecha_de_nacimiento' => $faker->date,
        'genero' => $faker->randomElement($array = array ('M','F')),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisMonth($max = 'now'),
        'updated_at' => $faker->dateTimeThisMonth($max = 'now'),
    ];
});
