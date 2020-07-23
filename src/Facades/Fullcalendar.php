<?php

namespace schedulemycoach\Fullcalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Fullcalendar
 * @package schedulemycoach\Fullcalendar\Facades
 */
class Fullcalendar extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel7-fullcalendar';
    }
}