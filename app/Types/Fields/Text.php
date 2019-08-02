<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Text extends FieldType
{
    public function rules()
    {
        return [
            'string',
        ];
    }

    public function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.text.form', compact('placeholder', 'label'))->render();
    }
}
