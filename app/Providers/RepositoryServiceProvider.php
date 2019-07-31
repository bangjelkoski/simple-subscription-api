<?php

namespace App\Providers;

use App\Repositories\FieldRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FieldRepository::class, function () {
            return new FieldRepository();
        });
    }
}
