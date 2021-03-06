Windows Azure Servicebus Queue driver for Laravel
=================================================

#### Installation

Require this package in your composer.json and run composer update:

	"autofactor/laravel-azure-servicebus-raw-queue": "1.*"

or run:

	composer require "autofactor/laravel-azure-servicebus-raw-queue"

After composer update is finished you need to add ServiceProvider to your `providers` array in `app/config/app.php`:

	'autofactor\LaravelAzureServicebusRawQueue\Support\Serviceprovider',

add the following to the `connection` array in `app/config/queue.php`, set your `default` connection to `azure` and fill out your own connection data from the Azure Management portal:

	'azure' => array(
        'driver'       => 'azure.servicebus.raw',
        'endpoint'     => 'https://*.servicebus.windows.net',
        'secret'       => '',
        'secretissuer' => 'owner',
        'queue'        => '',
        'job_handler'  => ''
    )

#### Usage
Once you completed the configuration you can use Laravel Queue API. If you used other queue drivers you do not need to change anything else. If you do not know how to use Queue API, please refer to the official Laravel [documentation](http://laravel.com/docs/queues).

#### Contribution
You can contribute to this package by opening issues/pr's. Enjoy!
