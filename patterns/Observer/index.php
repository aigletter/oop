<?php

use Patterns\Observer\OrderObserver;
use Patterns\Observer\OrderObserverSpl;
use Patterns\Observer\OrderSpl;
use Patterns\Observer\TestObserver;

include '../../vendor/autoload.php';

/*$order = new \Patterns\Observer\Order();

$observer = new OrderObserver();
$order->attach($observer);

$observer2 = new TestObserver();
$order->attach($observer2);

$order->setStatus(2);

echo '----------' . PHP_EOL;

$order->detach($observer2);

$order->setStatus(3);*/

$order = new OrderSpl();
$observer = new OrderObserverSpl();
$order->attach($observer);

$order->setStatus(5);


exit();