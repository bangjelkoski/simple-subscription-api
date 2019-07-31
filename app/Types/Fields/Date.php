<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Date extends FieldType
{
    protected function rules()
    {
        return [
            'date',
        ];
    }

    protected function render()
    {
        return view('types.fields.date.index')->render();
    }

    protected function renderForm()
    {
        return view('types.fields.date.form')->render();
    }
}
