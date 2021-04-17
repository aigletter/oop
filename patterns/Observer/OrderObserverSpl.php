<?php


namespace Patterns\Observer;


class OrderObserverSpl implements \SplObserver
{
    /**
     * @param OrderSpl $order
     */
    public function update(\SplSubject $order) {
        echo 'Status is changed to ' . $order->getStatus() . PHP_EOL;
    }
}