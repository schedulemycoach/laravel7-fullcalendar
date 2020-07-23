<?php

namespace walterbamert\Fullcalendar;

/**
 * Class JsExpression
 * @package walterbamert\Fullcalendar
 */
class JsExpression
{
    /** @var string */
    public $expression;

    /**
     * JsExpression constructor.
     * @param $expression
     */
    public function __construct($expression)
    {
        $this->expression = $expression;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->expression;
    }
}