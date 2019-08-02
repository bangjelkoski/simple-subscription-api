<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Email extends FieldType
{
    public function rules()
    {
        return [
            'email',
        ];
    }

    public function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.email.form', compact('placeholder', 'email'))->render();
    }
}
