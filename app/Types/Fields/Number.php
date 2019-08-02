<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use App\Models\Subscriber;

class Number extends FieldType
{
    public function rules()
    {
        return [
            'numeric',
        ];
    }

    public function render(Subscriber $subscriber)
    {
        $value = $this->getValue($subscriber);

        return view('types.fields.number.index', compact('value'))->render();
    }

    public function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.number.form', compact('placeholder', 'label'))->render();
    }
}
