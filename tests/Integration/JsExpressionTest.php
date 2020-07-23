<?php

namespace schedulemycoach\Fullcalendar\Test\Integration;

/**
 * Class JsExpressionTest
 * @package schedulemycoach\Fullcalendar\Test\Integration
 */
class JsExpressionTest extends \Orchestra\Testbench\TestCase
{
    /** @test */
    public function generate_event_with_id()
    {
        $jsExpressionTest = new \schedulemycoach\Fullcalendar\JsExpression("
                function( view, element ) {
                    console.log(\"View \"+view.name+\" rendered\");
                }
            ");

        $this->assertEquals("
                function( view, element ) {
                    console.log(\"View \"+view.name+\" rendered\");
                }
            ", $jsExpressionTest);
    }
}