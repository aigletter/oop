<?php


namespace Patterns\Events;


class Event
{
    public $eventType;

    public $subject;

    public function __construct(string $eventType, $subject)
    {
        $this->eventType = $eventType;
        $this->subject = $subject;
    }
}