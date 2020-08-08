<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\phone_number;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(phone_number::class, function (Faker $faker) {
    return [
        'phone_number'=>$faker->phoneNumber,
        'user_id'=>rand(1,2)
    ];
});
