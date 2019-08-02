<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use App\Models\Subscriber;

class Text extends FieldType
{
    protected function rules()
    {
        return [
            'string',
        ];
    }

    protected function render(Subscriber $subscriber)
    {
        $value = $this->getValue($subscriber);

        return view('types.fields.text.index', compact('value'))->render();
    }

    protected function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.text.form', compact('placeholder', 'label'))->render();
    }
}
