@if($include_full_scripts)
    @include('fullcalendar::files')
@endif
@if($include_min_scripts)
    @include('fullcalendar::minFiles')
@endif

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('{{ $id }}');
        var calendar = new FullCalendar.Calendar(calendarEl,
            {!! $options !!}
        );
        calendar.render();
    });
</script>