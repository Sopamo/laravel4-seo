<?php namespace Sopamo\Laravel4Seo;

use Illuminate\Support\ServiceProvider;

class Laravel4SeoServiceProvider extends ServiceProvider {

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
        // Require custom SEO routes
        include __DIR__ . '/../../routes.php';
        
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../../views', 'laravel4-seo');
        
        // Load translations
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'laravel4-seo');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->singleton('seo',function ($app)
        {
            return new SEOOutput();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
