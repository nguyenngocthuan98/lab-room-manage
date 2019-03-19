<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(App\Models\Computer::class, function (Faker $faker) {
	$idRoom = App\Models\Room::inRandomOrder()->first()->id;
    return [
        'name' => $faker->name,
        'desc' => $faker->languageCode,
        'status' => $faker->year,
        'rooms_id' => $idRoom,
    ];
});