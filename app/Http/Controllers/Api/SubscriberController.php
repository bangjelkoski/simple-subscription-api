<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SubscriberResource;
use App\Models\Subscriber;

class SubscriberController
{
    public function index()
    {
        // dd(Subscriber::all());

        return SubscriberResource::collection(Subscriber::all());
    }
}
