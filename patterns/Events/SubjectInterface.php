<?php


namespace Patterns\Events;


interface SubjectInterface
{
    public function attach(ObserverInterface $observer, string $eventType = null);

    public function detach(ObserverInterface $observer, string $eventType = null);

    public function notify(string $eventType, $subject);
}