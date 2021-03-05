<?php

use Oop\File;
use Oop\Vehicle;

require_once 'vendor/autoload.php';

$vehicles['car'] = new \Oop\Car('BMW', 2017, new \Oop\Engine());
$vehicles['plain'] = new \Oop\Plain();
$vehicles['ship'] = new \Oop\Ship();

$vehicles['cat'] = new \Oop\Cat();

// ...

/**
 * @param \Oop\Vehicle[] $vehicles
 */
function manageVehicles(array $vehicles)
{
    foreach ($vehicles as $vehicle) {
        if (!$vehicle instanceof \Oop\MovebleInterface) {
            throw new Exception('class not implements ' . \Oop\MovebleInterface::class);
        }

        $vehicle->move();
    }
}

function sendVehicle(\Oop\MovebleInterface $vehicle)
{
    $vehicle->move();
}

manageVehicles($vehicles);

/*$serialized = serialize($car);

$unserialized = unserialize($serialized);*/



/*$file = new File('test.txt');
$file->open();

// ...

$file2 = clone $file;
$file2->setFileName('hello.txt');
$file2->open();*/

exit();