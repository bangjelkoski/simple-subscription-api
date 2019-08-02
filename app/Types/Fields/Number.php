<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Number extends FieldType
{
    public function rules()
    {
        return [
            'numeric',
        ];
    }

    public function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.number.form', compact('placeholder', 'label'))->render();
    }
}
