<?php


namespace Patterns\Events;


use SplObserver;

class Order
{
    public const EVENT_CHANGED_STATUS = 'changed_status';

    public const EVENT_CHANGED_NAME = 'changed_name';

    protected $status;

    protected $name;

    protected $eventManager;

    public function setName($name)
    {
        $this->name = $name;

        $this->eventManager->notify(self::EVENT_CHANGED_NAME, $this);
    }

    public function getName()
    {
        return $this->name;
    }

    public function __construct(EventManager $eventManager)
    {
        $this->eventManager = $eventManager;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        $this->eventManager->notify(self::EVENT_CHANGED_STATUS, $this);
    }

    public function getStatus()
    {
        return $this->status;
    }
}