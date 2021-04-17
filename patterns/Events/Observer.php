<?php


namespace Patterns\Events;


class Observer implements ObserverInterface
{

    public function update(Event $event) {
        echo 'Произошло событие с заказом ' . $event->eventType . PHP_EOL;
    }
}