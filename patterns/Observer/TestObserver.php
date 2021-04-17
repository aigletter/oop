<?php


namespace Patterns\Observer;


class TestObserver implements ObserverInterface
{

    public function update() {
        echo 'Test observer' . PHP_EOL;
    }
}