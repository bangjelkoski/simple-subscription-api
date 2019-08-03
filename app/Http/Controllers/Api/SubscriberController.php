<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SubscriberResource;
use App\Models\Subscriber;

class SubscriberController
{
    public function index()
    {
        return SubscriberResource::collection(Subscriber::all());
    }

    public function store()
    {
        $subscriber = Subscriber::create();
        $subscriber->setFieldValues();

        return response()->json(['success' => true], 200);
    }

    public function update(Subscriber $subscriber)
    {
        $subscriber->fields()->delete();
        $subscriber->setFieldValues();

        return response()->json(['success' => true], 200);
    }
}
