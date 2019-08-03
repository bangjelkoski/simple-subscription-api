<?php

namespace App\Types\Fields;

use App\Abstracts\FieldType;

class Email extends FieldType
{
    public function rules()
    {
        return [
            'email',
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
