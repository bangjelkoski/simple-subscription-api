<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use App\Models\Subscriber;

class Number extends FieldType
{
    protected function rules()
    {
        return [
            'numeric',
        ];
    }

    protected function render(Subscriber $subscriber)
    {
        $value = $this->getValue($subscriber);

        return view('types.fields.number.index', compact('value'))->render();
    }

    protected function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.number.form', compact('placeholder', 'label'))->render();
    }
}
