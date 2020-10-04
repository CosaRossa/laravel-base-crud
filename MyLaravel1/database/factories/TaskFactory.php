<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
      'name' => $faker -> word(),
      'description' => $faker -> text($maxNbChars = 180),
      'start_date' => $faker -> date(),
      'end_date' => $faker -> date(),
      'price' => $faker -> randomFloat($nbmaxDecimals = 2, $min = 1, $max = 10000),
      'value' => $faker -> randomDigit()
    ];
});
