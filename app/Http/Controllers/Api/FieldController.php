<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\FieldResource;
use App\Models\Field;

class FieldController
{
    public function index()
    {
        return FieldResource::collection(Field::all());
    }
}
