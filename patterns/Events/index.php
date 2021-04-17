<?php

use Patterns\Events\EventManager;
use Patterns\Events\Observer;
use Patterns\Events\TestObserver;

include '../../vendor/autoload.php';

$eventManager = new EventManager();
$order = new \Patterns\Events\Order($eventManager);

$observer = new Observer();
$eventManager->attach($observer);

$observer2 = new TestObserver();
$eventManager->attach($observer2, \Patterns\Events\Order::EVENT_CHANGED_NAME);


$order->setStatus(5);

$order->setName('Hello wolrd');

exit();