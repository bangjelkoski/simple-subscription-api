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

    public function get(Subscriber $subscriber)
    {
        return new SubscriberResource($subscriber);
    }

    public function store()
    {
        $subscriber = Subscriber::create();
        $subscriber->setFieldValues();

        return response()->json(['success' => true], 200);
    }

    public function update(Subscriber $subscriber)
    {
        $subscriber->fields()->detach();
        $subscriber->setFieldValues();

        return response()->json(['success' => true], 200);
    }
}
