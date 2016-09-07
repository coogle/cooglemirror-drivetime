<?php namespace Cooglemirror\Drivetime;

use Illuminate\Support\ServiceProvider;

class DrivetimeServiceProvider extends ServiceProvider {

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
		$this->package('cooglemirror/drivetime', 'cooglemirror-drivetime');
		
		\Event::listen('cooglemirror.render', function($layoutView) {
		    
		    \View::composer('cooglemirror-drivetime::widget', 'Cooglemirror\Drivetime\Widget');
		    
		    $view = \View::make('cooglemirror-drivetime::widget')->render();
		    
		    $layoutView->with(\Config::get('cooglemirror-drivetime::widget.placement'), $view);
		});

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
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
