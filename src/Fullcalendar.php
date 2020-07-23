<?php

namespace walterbamert\Fullcalendar;

/**
 * Class Fullcalendar
 * @package walterbamert\Fullcalendar
 */
class Fullcalendar
{
    /** @var string */
    protected $id = 'fullcalendar';
    /** @var array */
    protected $events = [];
    /** @var array */
    protected $defaultOptions = [
        'headerToolbar'   => [
            'left'   => 'prev,next today',
            'center' => 'title',
            'right'  => 'dayGridMonth,timeGridWeek,timeGridDay',
        ]
    ];
    /** @var array */
    protected $clientOptions = [];

    /**
     * Renders the view that includes the full script files
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderFullScriptFiles()
    {
        return view('fullcalendar::files');
    }

    /**
     * Renders the view that includes the minifiedscript files
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function renderMinScriptFiles()
    {
        return view('fullcalendar::minFiles');
    }

    /**
     * @return string
     */
    public function generate()
    {
        return $this->calendar() . $this->script();
    }

    /**
     * Create the <div> the calendar will be rendered into
     * @return string
     */
    private function calendar()
    {
        return "<div id='" . $this->getId() . "'></div>";
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the <script> block to render the calendar
     * @return \Illuminate\View\View
     */
    private function script()
    {
        return view('fullcalendar::script', [
            'id'              => $this->getId(),
            'options'         => $this->getOptionsJson(),
            'include_full_scripts' => config('fullcalendar.include_full_scripts', false),
            'include_min_scripts' => config('fullcalendar.include_min_scripts', true),
        ])->render();
    }

    /**
     * @return string
     */
    public function getOptionsJson()
    {
        $options = $this->getOptions();

        if (!isset($options['events'])) {
            $options['events'] = $this->events;
        }

        // Encode the JSON properly to format the callbacks
        return JsonEncoder::encode($options);
    }


    /**
     * Get the fullcalendar options (not including the events list)
     * @return array
     */
    public function getOptions()
    {
        return array_merge($this->defaultOptions, $this->clientOptions);
    }


    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->clientOptions = $options;
    }

    /**
     * @return array
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param mixed $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }
}