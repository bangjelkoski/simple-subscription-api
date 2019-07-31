<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Field;
use Faker\Generator as Faker;

$factory->define(Field::class, function (Faker $faker) {
    $fields = FieldRepository::$fields;

    return [
        'title'       => $faker->word,
        'placeholder' => $faker->words(2),
        'type'        => $fields['text'],
        'parameters'  => [
            'validation' => [
                'required',
                'string',
            ],
        ],
    ];
});
