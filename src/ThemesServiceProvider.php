<?php namespace Artlabs\Themes;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class ThemesServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the service provider.
	 *
	 * @return null
	 */
	public function boot()
	{
		$this->registerHelpers();
	}

	/**
	 * Register the helpers file.
	 */
	public function registerHelpers()
	{
		require __DIR__.'/helpers.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerServices();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return string[]
	 */
	public function provides()
	{
		return [];
	}

	/**
	 * Register the package services.
	 *
	 * @return void
	 */
	protected function registerServices()
	{
		$this->app->register('Teepluss\Theme\ThemeServiceProvider');
		$loader = AliasLoader::getInstance();
		$loader->alias('Theme', 'Teepluss\Theme\Facades\Theme');

	}

}
