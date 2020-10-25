<?php

namespace App\Providers;

use App\Task;
use App\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('mailgun.client', function() {
            return \Http\Adapter\Guzzle6\Client::createWithConfig([
                // your Guzzle6 configuration
                'proxy' =>env("PROXY_IP").":".env("PROXY_PORT"),
                'verify' => false,
                'debug' => true,
                'timeout' => 15,
            ]);
        });

    }

    /**mailgun.client
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
