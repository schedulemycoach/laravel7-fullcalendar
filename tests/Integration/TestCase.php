<?php

namespace aitcprojects\Fullcalendar\Test\Integration;

/**
 * Class EventTest
 * @package aitcprojects\Fullcalendar\Test\Integration
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Do any setup
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \aitcprojects\Fullcalendar\FullcalendarServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Fullcalendar' => \aitcprojects\Fullcalendar\Facades\Fullcalendar::class,
        ];
    }
}