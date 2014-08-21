<?php namespace Bondmedia\Admin;

use Bondmedia\Admin\ShortCode\Block;
use Bondmedia\Admin\ShortCode\BMSlider;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {

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
		$this->package('bondmedia/admin');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Page', 'Bondmedia\Admin\Facades\Page');
            $loader->alias('BMUser', 'Bondmedia\Admin\Facades\BMUser');
            //$loader->alias('Template', 'Bondmedia\Admin\Facades\Template');
            $loader->alias('Assets', 'Bondmedia\Admin\Facades\AssetCache');
            $loader->alias('BMAdmin', 'Bondmedia\Admin\Facades\BondAdmin');
        });

        $this->app->bind('bm-slider', function($app)
        {
            return new BMSlider();
        });

        $this->app->bind('bm-block', function($app)
        {
            return new Block();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('admin');
	}

}
