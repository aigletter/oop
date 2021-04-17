<?php


namespace Patterns\Observer;


class OrderObserver implements ObserverInterface
{
    public function update() {
        echo 'Sent email' . PHP_EOL;
    }
}