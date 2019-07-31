<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Email extends FieldType
{
    protected function rules()
    {
        return [
            'email',
        ];
    }

    protected function render()
    {
        return view('types.fields.email.index')->render();
    }

    protected function renderForm()
    {
        return view('types.fields.email.form')->render();
    }
}
