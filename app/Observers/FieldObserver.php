<?php

namespace App\Observers;

use App\Models\Field;

class FieldObserver
{
    public function saving(Field $field)
    {
        $field->validate();
    }
}
