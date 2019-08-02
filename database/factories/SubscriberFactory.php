<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\SubscriberState;
use App\Models\Field;
use App\Models\Subscriber;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Subscriber::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->afterCreating(Subscriber::class, function (Subscriber $subscriber, Faker $faker) {
    $subscriber->fields()->attach(Field::getFromCode('email')->id, [
        'value' => $faker->email,
    ]);

    $subscriber->fields()->attach(Field::getFromCode('name')->id, [
        'value' => $faker->firstName,
    ]);

    $subscriber->fields()->attach(Field::getFromCode('image')->id, [
        'value' => $faker->imageUrl,
    ]);

    $subscriber->fields()->attach(Field::getFromCode('state')->id, [
        'value' => Arr::random(SubscriberState::getStates()),
    ]);
});
