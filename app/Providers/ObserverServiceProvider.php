<?php

namespace App\Providers;

use App\Models\Field;
use App\Models\Subscriber;
use App\Observers\FieldObserver;
use App\Observers\SubscriberObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Subscriber::observe(SubscriberObserver::class);
        Field::observe(FieldObserver::class);
    }
}
