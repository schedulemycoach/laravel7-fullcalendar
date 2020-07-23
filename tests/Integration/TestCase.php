<?php

namespace walterbamert\Fullcalendar\Test\Integration;

/**
 * Class EventTest
 * @package walterbamert\Fullcalendar\Test\Integration
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
            \walterbamert\Fullcalendar\FullcalendarServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Fullcalendar' => \walterbamert\Fullcalendar\Facades\Fullcalendar::class,
        ];
    }
}