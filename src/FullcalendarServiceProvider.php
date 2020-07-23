<?php

namespace walterbamert\Fullcalendar;

use Illuminate\Support\ServiceProvider;

/**
 * Class FullcalendarServiceProvider
 * @package walterbamert\Fullcalendar
 */
class FullcalendarServiceProvider extends ServiceProvider
{
    /** Identifier for the service */
    const IDENTIFIER = 'laravel-fullcalendar';

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(self::IDENTIFIER, function ($app) {
            return $app->make(Fullcalendar::class);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // specify from where we want to load the views
        $this->loadViewsFrom(__DIR__ . '/views/', 'fullcalendar');

        // publish the config file
        $this->publishes([
            __DIR__ . '/config/fullcalendar.php' => config_path('fullcalendar.php'),
        ], 'config');

        // publish all the required files to generate the calendar
        $this->publishes([
            // fullcalendar library
            __DIR__ . '/../../../../node_modules/fullcalendar/main.css'       => public_path('css/fullcalendar.css'),
            __DIR__ . '/../../../../node_modules/fullcalendar/main.min.css' => public_path('css/fullcalendar.min.css'),
            __DIR__ . '/../../../../node_modules/fullcalendar/main.js'        => public_path('js/fullcalendar.js'),
            __DIR__ . '/../../../../node_modules/fullcalendar/main.min.js'        => public_path('js/fullcalendar.min.js'),
            __DIR__ . '/../../../../node_modules/fullcalendar/locales-all.js'          => public_path('js/locale-all.js'),
            __DIR__ . '/../../../../node_modules/fullcalendar/locales-all.min.js'          => public_path('js/locale-all.min.js'),
            // moment library
            __DIR__ . '/../../../../node_modules/moment/moment.js'                         => public_path('js/moment.js'),
        ], 'fullcalendar');
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [self::IDENTIFIER];
    }
}