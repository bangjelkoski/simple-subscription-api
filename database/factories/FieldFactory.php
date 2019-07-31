<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Field;
use App\Repositories\FieldRepository;
use Faker\Generator as Faker;

$factory->define(Field::class, function (Faker $faker) {
    $fields = FieldRepository::$fields;

    return [
        'title'       => $faker->word,
        'placeholder' => $faker->word,
        'type'        => $fields['text'],
        'parameters'  => [
            'validation' => [
                'required',
                'string',
            ],
        ],
    ];
});
