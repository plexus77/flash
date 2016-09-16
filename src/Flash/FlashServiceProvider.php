<?php

namespace PSDesign\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'PSDesign\Flash\SessionStore',
			'PSDesign\Flash\LaravelSessionStore'
		);

		$this->app->singleton('flash', function () {
			return $this->app->make('PSDesign\Flash\FlashNotifier');
		});
	}

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__ . '/../views', 'flash');

		$this->publishes([
			__DIR__ . '/../views' => base_path('resources/views/vendor/flash')
		]);
	}

}
