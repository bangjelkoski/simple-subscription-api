<?php

namespace App\Repositories;

use App\Abstracts\FieldType;
use App\Types\Field\Date;
use App\Types\Field\Email;
use App\Types\Field\Number;
use App\Types\Field\Select;
use App\Types\Field\Text;
use App\Types\Field\Textarea;

class FieldRepository
{
    public static $fields = [
        'text'     => Text::class,
        'email'    => Email::class,
        'number'   => Number::class,
        'select'   => Select::class,
        'date'     => Date::class,
        'textarea' => Textarea::class,
    ];

    public static function fields()
    {
        return static::$fields;
    }

    public static function codes()
    {
        return array_keys(static::$fields);
    }

    public static function classes()
    {
        return array_values(static::$fields);
    }

    /**
     * @param $code
     * @param $block
     * @return FieldType
     */
    public static function make($code, $field)
    {
        $class = static::$fields[$code] ?? $code;

        return class_exists($class) ? new $class($field) : optional();
    }
}
