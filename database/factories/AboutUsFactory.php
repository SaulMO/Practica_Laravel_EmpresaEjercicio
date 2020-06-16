<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aboutus;
use Faker\Generator as Faker;

$factory->define(Aboutus::class, function (Faker $faker) {
    return [
        'foto' => 'https://www.thispersondoesnotexist.com/image',
        'nombre' => $faker->name,
        'puesto' => $faker->sentence(8,true),
    ];
});
