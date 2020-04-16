<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\models\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'slug' => $faker->word,
    ];
});
