<?php

namespace aitcprojects\Fullcalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Fullcalendar
 * @package aitcprojects\Fullcalendar\Facades
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