laravel-vitelity
======

**NOTE:** This package is no longer in active development. Feel free to fork and extend it as needed.

A simple Laravel interface for interacting with the Vitelity API.


# Installation
To install the package, simply add the following to your Laravel installation's `composer.json` file:

```json
"require": {
	"laravel/framework": "5.*",
	"blob/laravel-vitelity": "dev-master"
},
```

Run `composer update` to pull in the files.

Then, add the following **Service Provider** to your `providers` array in your `config/app.php` file:

```php
'providers' => [
    ...
    Vitelity\Providers\AddOnsServiceProvider::class,
    Vitelity\Providers\BillingServiceProvider::class,
    Vitelity\Providers\DIDInventoryServiceProvider::class,
    Vitelity\Providers\DIDOrderingServiceProvider::class,
    Vitelity\Providers\E911ServiceProvider::class,
    Vitelity\Providers\FaxServiceProvider::class,
    Vitelity\Providers\LNPServiceProvider::class,
    Vitelity\Providers\PlacingCallServiceProvider::class,
    Vitelity\Providers\RoutingAndNetworkServiceProvider::class,
    Vitelity\Providers\SMSServiceProvider::class,
    Vitelity\Providers\TelecomFunctionsServiceProvider::class,
];
```

From the command-line run:
`php artisan vendor:publish`

# Configuration

Open `config/vitelity.php` and configure the api endpoint and credentials:

```php
return [
    // API URL
    'url'       =>	'https://mor.url.com',

    // API LOGIN
    'login'     =>	'admin_user',

    // API PASSWORD
    'password'  =>	'password123',
];
```

# Usage
```php
$DIDs = VitelitySMS::smsdids();
```
