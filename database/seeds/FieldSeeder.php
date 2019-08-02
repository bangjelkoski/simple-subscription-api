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
            'label'       => 'Email',
            'placeholder' => 'john@example.com',
            'type'        => $fields['email'],
            'parameters'  => [
                'validation' => [
                    'required',
                ],
            ],
        ]);

        factory(Field::class)->create([
            'label'       => 'Name',
            'placeholder' => 'John Doe',
            'type'        => $fields['text'],
            'parameters'  => [
                'validation' => [
                    'required',
                    'max:60',
                ],
            ],
        ]);

        factory(Field::class)->create([
            'label'       => 'Image',
            'placeholder' => 'Image',
            'type'        => $fields['image'],
            'parameters'  => [
                'validation' => [
                    'required',
                ],
            ],
        ]);

        factory(Field::class)->create([
            'label'      => 'State',
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
