<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;
use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
        
        'name'  => $faker -> randomElement($array = array ('stampante','tastiera','mouse', 'monitor', 'cuffie', 'CPU', 'Scheda video')),
        'model' => $faker -> regexify('[A-Z0-9]{5}'),
        'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
        'watt'  => rand(5, 100),
    ];
});
