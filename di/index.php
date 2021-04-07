<?php

use di\Anything;
use di\Car;
use di\Engine;
use di\Injector;
use di\Something;
use di\Test;
use di\Transmission;

require '../vendor/autoload.php';

/*$engine = new Engine();
$anything = new Anything();
$something = new Something($anything);
$transmission = new Transmission($something);
$car = new Car($engine, $transmission);*/

$injector = new Injector();

/** @var Car $car */
$car = $injector->resolveDependencies(Car::class);
$test = $injector->resolveDependencies(Test::class);
$car->setTest($test);
$car->move();

exit();
