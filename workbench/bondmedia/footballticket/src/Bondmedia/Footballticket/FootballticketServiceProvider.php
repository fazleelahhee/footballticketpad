<?php namespace Bondmedia\Footballticket;

use Bondmedia\Footballticket\ShortCode\RegistrationForm;
use Illuminate\Support\ServiceProvider;

class FootballticketServiceProvider extends ServiceProvider {

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
		$this->package('bondmedia/footballticket', 'footballticket');
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
            $loader->alias('TicketSoap', 'Bondmedia\Footballticket\Facades\TicketSoap');
        });

        $this->app->bind('registration-form', function($app)
        {
            return new RegistrationForm();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('footballticket');
	}

}
