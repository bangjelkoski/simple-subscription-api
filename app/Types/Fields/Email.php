<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use App\Models\Subscriber;

class Email extends FieldType
{
    public function rules()
    {
        return [
            'email',
        ];
    }

    public function render(Subscriber $subscriber)
    {
        $value = $this->getValue($subscriber);

        return view('types.fields.email.index', compact('value'))->render();
    }

    public function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.email.form', compact('placeholder', 'email'))->render();
    }
}
