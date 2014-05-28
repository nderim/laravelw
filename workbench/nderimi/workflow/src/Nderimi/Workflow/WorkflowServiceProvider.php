<?php namespace Nderimi\Workflow;

use Illuminate\Support\ServiceProvider;

class WorkflowServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
    public function boot()
    {
       $this->package('nderimi/workflow');
     }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
 	 $this->app['workflow'] = $this->app->share(function($app)
  	{
    	return new Workflow;
  	});

 	 $this->app->booting(function()
	{
  	$loader = \Illuminate\Foundation\AliasLoader::getInstance();
  	$loader->alias('Workflow', 'Nderimi\Workflow\Facades\Workflow');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('workflow');
	}

}
