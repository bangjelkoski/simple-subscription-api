<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Number extends FieldType
{
    public function rules()
    {
        return [
            'numeric',
        ];
    }

    public function formOptions()
    {
        $placeholder = $this->getParameter('placeholder');
        $label = $this->getParameter('label');
        $code = $this->getParameter('code');
        $value = $this->getValue();

        return compact('placeholder', 'label', 'code', 'value');
    }
}
