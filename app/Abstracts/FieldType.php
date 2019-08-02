<?php

namespace App\Abstracts;

use App\Models\Field;
use App\Models\Subscriber;
use Illuminate\Validation\Validator;

abstract class FieldType
{
    /**
     * @var Field
     */
    public $field;

    public function __construct(Field $field)
    {
        $this->field = $field;
    }

    public function getSubscriber()
    {
        return Subscriber::find($this->field->pivot->subscriber_id);
    }

    public static function code()
    {
        return snake_case(class_basename(static::class));
    }

    public function rules()
    {
        return [];
    }

    public function validateParameters()
    {
        $validationRules = array_merge($this->rules(), $this->getParameter('validation'));
        $validationRules = implode('|', $validationRules);

        return Validator::make(request()->all(), ['value' => $validationRules])->validate();
    }

    public function getParameter($parameter)
    {
        return $this->field->parameters[$parameter] ?? null;
    }

    public function getValue(Subscriber $subscriber)
    {
        $field = $subscriber->getFieldValue($this->field->code);

        return $field->value ?? null;
    }

    abstract public function render(Subscriber $subscriber);

    abstract public function renderForm();
}
