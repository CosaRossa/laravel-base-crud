<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firstname' => $faker -> firstName(),
      'lastname' => $faker -> lastName(),
      'username' => $faker -> unique() -> userName(),
      'birthDay' => $faker -> date(),
      'bio' => $faker -> text($maxNbChars = 20),
      'salary' => $faker -> randomFloat($nbmaxDecimals = 2, $min = 1000, $max = 10000),
      'rating' => $faker -> randomDigit(),
      'fired' => $faker -> boolean()
    ];
});
