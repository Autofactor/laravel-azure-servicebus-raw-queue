<?php

namespace Autofactor\LaravelAzureServicebusRawQueue\Support;

use Autofactor\LaravelAzureServicebusRawQueue\AzureConnector;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->booted(function () {
            $this->app->queue->extend('azure.servicebus.raw', function () {
                return new AzureConnector;
            });
        });
    }

}
