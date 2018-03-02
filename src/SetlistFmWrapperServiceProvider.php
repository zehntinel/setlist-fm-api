<?php
namespace Zehntinel\SetlistFmApi;

use Illuminate\Support\ServiceProvider;

/**
 * Class SetlistFmWrapperServiceProvider
 * @package Zehntinel\SetlistFmApi
 */
class SetlistFmWrapperServiceProvider extends ServiceProvider
{
    const TRANSLATIONS_FILE = '/resources/lang/es/setlist-fm-api.php';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/config/setlist-fm-api.php' => config_path('zehntinel/setlist-fm-api.php')]);
        $this->publishes([__DIR__ . self::TRANSLATIONS_FILE => base_path(self::TRANSLATIONS_FILE)]);
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
