<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;
use Illuminate\Validation\Rule;

class Select extends FieldType
{
    public function rules()
    {
        $options = $this->getParameter('options');

        return [
            Rule::in(array_keys($options)),
        ];
    }

    public function formOptions()
    {
        $options = $this->getParameter('options');
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');
        $code = $this->getParameter('code');
        $value = $this->getValue();

        return compact('placeholder', 'label', 'options', 'code', 'value');
    }
}
