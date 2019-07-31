<?php

use App\Enums\SubscriberState;
use App\Models\Field;
use App\Repositories\FieldRepository;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = FieldRepository::$fields;

        factory(Field::class)->create([
            'title'       => 'Email',
            'code'        => 'email',
            'placeholder' => 'john@example.com',
            'type'        => $fields['email'],
            'parameters'  => [
                'validation' => [
                    'required',
                    'email',
                ],
            ],
        ]);

        factory(Field::class)->create([
            'title'       => 'Name',
            'code'        => 'name',
            'placeholder' => 'John Doe',
            'type'        => $fields['text'],
            'parameters'  => [
                'validation' => [
                    'required',
                    'string',
                    'max:60',
                ],
            ],
        ]);

        factory(Field::class)->create([
            'title'      => 'State',
            'code'       => 'state',
            'type'       => $fields['select'],
            'parameters' => [
                'validation' => [
                    'required',
                ],

                'options'    => SubscriberState::getStates(),
            ],
        ]);

    }
}
