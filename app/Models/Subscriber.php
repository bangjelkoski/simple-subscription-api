<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $with = ['fields'];

    public function fields()
    {
        return $this->belongsToMany(Field::class)->withPivot('value');
    }

    public function getFieldValue($code)
    {
        $field = Field::getFromCode($code);
        $result = $this->fields()->where('field_id', $field->id)->first();

        return $result ? optional($result->pivot)->value : null;
    }
}
