<?php


namespace Patterns\Events;


interface ObserverInterface
{
    public function update(Event $event);
}