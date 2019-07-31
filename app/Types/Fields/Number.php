<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Number extends FieldType
{
    protected function rules()
    {
        return [
            'integer',
            '',
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
