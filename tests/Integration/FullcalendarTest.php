<?php

namespace schedulemycoach\Fullcalendar\Test\Integration;

/**
 * Class FullcalendarTest
 * @package schedulemycoach\Fullcalendar\Test\Integration
 */
class FullcalendarTest extends TestCase
{

    /** @test */
    public function generate_event_with_id()
    {
        // Generate a new fullcalendar instance
        $calendar = new \schedulemycoach\Fullcalendar\Fullcalendar();

        // Set options
        $calendar->setOptions([
            'locale'      => 'en',
            'weekNumbers' => true,
            'selectable'  => true,
            'initialView' => 'dayGridMonth',
        ]);

        // This looks terrible, I'm sorry...
        $this->assertEquals("<div id='fullcalendar'></div><!-- fullcalendar css -->
<link href=\"http://localhost/css/fullcalendar.min.css\" rel=\"stylesheet\">
<!-- moment js -->
<script src=\"http://localhost/js/moment.js\"></script>
<!-- fullcalendar js -->
<script src=\"http://localhost/js/fullcalendar.min.js\"></script>
<script src=\"http://localhost/js/locale-all.min.js\"></script>
<script type=\"text/javascript\">
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('fullcalendar');
        var calendar = new FullCalendar.Calendar(calendarEl,
            {\"headerToolbar\":{\"left\":\"prev,next today\",\"center\":\"title\",\"right\":\"dayGridMonth,timeGridWeek,timeGridDay\"},\"locale\":\"en\",\"weekNumbers\":true,\"selectable\":true,\"initialView\":\"dayGridMonth\",\"events\":[]}
        );
        calendar.render();
    });
</script>", $calendar->generate());
    }
}
