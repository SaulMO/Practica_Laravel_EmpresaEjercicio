<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portafolio;
use Faker\Generator as Faker;

$factory->define(Portafolio::class, function (Faker $faker) {
    return [
        'foto' => '',
    ];
});
