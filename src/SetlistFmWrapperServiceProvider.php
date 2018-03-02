<?php
namespace Zehntinel\SetlistFmApi;

use Illuminate\Support\ServiceProvider;

class SetlistFmWrapperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/setlist-fm-api.php' => config_path('zehntinel/setlist-fm-api.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
