<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Child;
use Faker\Generator as Faker;

$factory->define(child::class, function (Faker $faker) {
    return [
        'date_birth'=>$faker->date(),
        'place_birth'=>$faker->state(),
        'child_firstname'=>$faker->name(),
        'child_middlename'=>$faker->name(),
        'child_lastname'=>$faker->name(),
        'child_weight'=>35,
        'eye_color'=>'Blue',
        'sex'=>'F',
        'f_firstname'=>$faker->name(),
        'f_surname'=>$faker->name(),
        'f_national_id'=>$faker->name(),
        'm_maiden'=>$faker->name(),
        'm_firstname'=>$faker->name(),
        'm_lastname'=>$faker->name(),
        'm_national_id'=>'3456744567JA',
        'nationality'=>$faker->country(),
        'address'=>$faker->address(),
    ];
});
