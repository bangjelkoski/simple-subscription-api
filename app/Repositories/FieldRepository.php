<?php

namespace App\Repositories;

use App\Abstracts\FieldType;
use App\Types\Fields\Date;
use App\Types\Fields\Email;
use App\Types\Fields\Image;
use App\Types\Fields\Number;
use App\Types\Fields\Select;
use App\Types\Fields\Text;
use App\Types\Fields\Textarea;

class FieldRepository
{
    public static $fields = [
        'text'     => Text::class,
        'email'    => Email::class,
        'number'   => Number::class,
        'select'   => Select::class,
        'image'    => Image::class,
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
