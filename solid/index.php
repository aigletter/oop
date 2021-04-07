<?php

use solid\ApiSource;
use solid\DbSource;
use solid\FileSource;
use solid\Order;
use solid\OrderAbstract;
use solid\OrderBuilder;
use solid\OrderRepository;
use solid\OrderViewer;
use solid\Product;
use solid\Rectangle;
use solid\Square;
use solid\VirtualOrderBuilder;

include '../vendor/autoload.php';

// До
//$order = new Order(1);
//$order = Order::load(1);
//$order->view();

// Первый принцип
/*$repository = new OrderRepository();

if ($order = $repository->load(2)) {
    $viewer = new OrderViewer();
    $viewer->view($order);
}*/

// Второй принцип
//$source = new DbSource();
$source = new FileSource();
//$source = new ApiSource();

//$builder = new OrderBuilder();
$builder = new VirtualOrderBuilder();
$repository = new OrderRepository($source, $builder);
$viewer = new OrderViewer();


// Client code
if ($order = $repository->load(1)) {
    $viewer->view($order);
}

sendOrder($order);

function sendOrder(OrderAbstract $order)
{
    $weight = 0;
    $products = $order->getProducts();
    /** @var Product $product */
    foreach ($products as $product) {
        $productWeight = $product->calculateWeight();
        if (!$productWeight) {
            throw new Exception('Пошло что-то не так');
        }
        $weight += $productWeight;
    }

    // ...

    echo $weight;
}

/*$rectangle = new Square();
something($rectangle);

function something(Rectangle $rectangle)
{
    $with = 10;
    $height = 5;

    $rectangle->setWith($with);
    $rectangle->setHeight($height);

    if ($rectangle->calculateSquare() != $with * $height) {
        throw new Exception('Not equal');
    }
}*/

exit();