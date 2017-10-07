<?php

use Faker\Generator as Faker;

$factory->define(App\Dataset::class, function (Faker $faker) {
    return [
        'gender'    => random_int(0, 2),
        'kids'      => random_int(0, 1),
        'stupid'    => random_int(0, 1),
        'hungry'    => random_int(0, 1),
        'age'       => random_int(0, 200),
        'weird'     => random_int(0, 2),

        'categories'  => random_int(0, 3),
        //
    ];
});
