<?php

namespace Vitelity\Providers;

use Illuminate\Support\ServiceProvider;

class SMSServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        //
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('vitelitysms', function($app) {
		    return new \Vitelity\SMS;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('VitelitySMS', 'Vitelity\Facades\SMS');
		});

        $configPath = config_path('vitelity.php');
        if (!\Illuminate\Support\Facades\File::exists($configPath)) {
            $this->publishes([
                __DIR__ . '/../config/vitelity.php' => $configPath
            ]);
        }
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('vitelitysms');
	}

}
