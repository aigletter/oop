<?php


namespace Patterns\Events;


class TestObserver implements ObserverInterface
{
    public function update(Event $event) {
       echo "произошло событи " . $event->eventType . '. Изменено название на ' . $event->subject->getName() . PHP_EOL;
    }
}