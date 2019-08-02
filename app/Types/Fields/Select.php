<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use App\Models\Subscriber;
use Illuminate\Validation\Rule;

class Number extends FieldType
{
    public function rules()
    {
        $options = $this->getParameter('options');

        return [
            Rule::in(array_keys($options)),
        ];
    }

    public function render(Subscriber $subscriber)
    {
        $value = $this->getValue($subscriber);

        return view('types.fields.date.index', compact('value'))->render();
    }

    public function renderForm()
    {
        $options = $this->getParameter('options');
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');

        return view('types.fields.date.form', compact('options', 'label', 'placeholder'))->render();
    }
}
