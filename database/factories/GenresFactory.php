<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Genres;
use Faker\Generator as Faker;

$factory->define(Genres::class, function (Faker $faker) {
    return [
        'name' => 'drama'
    ];
});
