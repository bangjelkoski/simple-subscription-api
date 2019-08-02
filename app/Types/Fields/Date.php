<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Date extends FieldType
{
    public function rules()
    {
        return [
            'date',
        ];
    }

    public function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.date.form', compact('placeholder', 'label'))->render();
    }
}
