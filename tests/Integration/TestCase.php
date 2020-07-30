<?php

namespace schedulemycoach\Fullcalendar\Test\Integration;

/**
 * Class EventTest
 * @package schedulemycoach\Fullcalendar\Test\Integration
 */
abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Do any setup
     */
    public function setUp(): void
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
            \schedulemycoach\Fullcalendar\FullcalendarServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Fullcalendar' => \schedulemycoach\Fullcalendar\Facades\Fullcalendar::class,
        ];
    }
}