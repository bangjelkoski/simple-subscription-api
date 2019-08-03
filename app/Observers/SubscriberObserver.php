<?php

namespace App\Observers;

use App\Models\Field;
use App\Models\Subscriber;

class SubscriberObserver
{
    public function saving(Subscriber $subscriber)
    {
        $fields = collect(array_keys(request()->all()));

        $fields->each(function ($field) {
            $instance = Field::getFromCode($field);
            $instance->type()->validate();
        });
    }
}
