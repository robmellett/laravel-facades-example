<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Contentful\Delivery\Client as DeliveryClient;

class ContentfulProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("contentful", function () {
            $access_token = config('contentful')['delivery.token'];
            $space_id = config("contentful")['delivery.space'];
            $environment = config("contentful")['delivery.environment'];

            return new DeliveryClient($access_token, $space_id, $environment);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
