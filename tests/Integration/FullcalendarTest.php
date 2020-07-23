<?php

namespace aitcprojects\Fullcalendar\Test\Integration;

/**
 * Class FullcalendarTest
 * @package aitcprojects\Fullcalendar\Test\Integration
 */
class FullcalendarTest extends TestCase
{

    /** @test */
    public function generate_event_with_id()
    {
        // Generate a new fullcalendar instance
        $calendar = new \aitcprojects\Fullcalendar\Fullcalendar();

        // Set options
        $calendar->setOptions([
            'locale'      => 'nl',
            'weekNumbers' => true,
            'selectable'  => true,
            'initialView' => 'dayGridMonth',
        ]);

        // This looks terrible, I'm sorry...
        $this->assertEquals("<div id='fullcalendar'></div><!-- fullcalendar css -->

<link href=\"http://localhost/css/fullcalendar.css\" rel=\"stylesheet\">
<!-- moment js -->
<script src=\"http://localhost/js/moment.js\"></script>
<!-- fullcalendar js -->
<script src=\"http://localhost/js/fullcalendar.js\"></script>
<script src=\"http://localhost/js/locale-all.js\"></script>


<script type=\"text/javascript\">
 document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('fullcalendar');
        var calendar = new FullCalendar.Calendar(calendarEl,
            {\"header\":{\"left\":\"prev,next today\",\"center\":\"title\",\"right\":\"month,agendaWeek,agendaDay\"},\"firstDay\":1,\"locale\":\"nl\",\"weekNumbers\":true,\"selectable\":true,\"defaultView\":\"agendaWeek\",\"events\":[]}
        )};
</script>
", $calendar->generate());
    }
}
