<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use App\Models\Subscriber;

class Email extends FieldType
{
    protected function rules()
    {
        return [
            'email',
        ];
    }

    protected function render(Subscriber $subscriber)
    {
        $value = $this->getValue($subscriber);

        return view('types.fields.email.index', compact('value'))->render();
    }

    protected function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.email.form', compact('placeholder', 'email'))->render();
    }
}
