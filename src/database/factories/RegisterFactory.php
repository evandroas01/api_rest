<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Register::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'age'=>$faker->randomNumber(),
        'email'=>$faker->email
    ];
});
