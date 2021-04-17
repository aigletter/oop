<?php


namespace Patterns\Events;


class EventManager implements SubjectInterface
{
    public const TYPE_ALL = 'all';

    /**
     * @var ObserverInterface
     */
    protected $observers = [];

    public function attach(ObserverInterface $observer, string $eventType = null) {
        $eventType = $eventType ?? self::TYPE_ALL;

        $this->observers[$eventType][] = $observer;
    }

    public function detach(ObserverInterface $observer, string $eventType = null) {
        $eventType = $eventType ?? self::TYPE_ALL;

        if (array_key_exists($eventType, $this->observers)) {
            unset($this->observers[$eventType]);
        }
    }

    public function notify(string $eventType, $subject) {
        $event = new Event($eventType, $subject);

        /** @var ObserverInterface $observer */
        if (isset($this->observers[$eventType])) {
            foreach ($this->observers[$eventType] as $observer) {
                $observer->update($event);
            }
        }

        foreach ($this->observers[self::TYPE_ALL] as $observer) {
            $observer->update($event);
        }
    }
}