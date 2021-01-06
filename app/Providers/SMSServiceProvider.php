<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SMSService;

class SMSServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sms', function () {
            $sms_server = new SMSService();

            return $sms_server;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
