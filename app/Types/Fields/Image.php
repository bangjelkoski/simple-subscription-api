<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use App\Models\Subscriber;

class Number extends FieldType
{
    protected function rules()
    {
        return [
            'image',
        ];
    }

    protected function render(Subscriber $subscriber)
    {
        $value = $this->getValue($subscriber);

        return view('types.fields.image.index', compact('value'))->render();
    }

    protected function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.text.form', compact('placeholder', 'label'))->render();
    }
}
