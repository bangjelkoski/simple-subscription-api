<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use App\Models\Subscriber;

class Textarea extends FieldType
{
    public function rules()
    {
        return [
            'string',
        ];
    }

    public function render(Subscriber $subscriber)
    {
        $value = $this->getValue($subscriber);

        return view('types.fields.textarea.index', compact('value'))->render();
    }

    public function renderForm()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.textarea.form', compact('placeholder', 'label'))->render();
    }
}
