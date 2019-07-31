<?php

namespace App\Abstracts;

use App\Models\Field;
use Illuminate\Validation\Validator;

abstract class FieldType
{
    /**
     * @var Field
     */
    protected $field;

    public function __construct(Field $field)
    {
        $this->field = $field;
    }

    protected static function code()
    {
        return snake_case(class_basename(static::class));
    }

    protected function rules()
    {
        return [];
    }

    protected function validateParameters()
    {
        $validationRules = array_merge($this->rules(), $this->getParameter('validation'));
        $validationRules = implode('|', $validationRules);

        return Validator::make(request()->all(), ['value' => $validationRules])->validate();
    }

    protected function getParameter($parameter)
    {
        return $this->field->parameters[$parameter] ?? null;
    }

    abstract protected function render();

    abstract protected function renderForm();
}
