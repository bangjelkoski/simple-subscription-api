<?php

namespace App\Observers;

use App\Models\Subscriber;

class SubscriberObserver
{
    public function saving(Subscriber $subscriber)
    {
        $fields = collect(request()->get('fields'));

        $fields->each(function ($field) {
            $instance = Field::getFromCode($field);
            $instance->type()->validate();
        });
    }
}
