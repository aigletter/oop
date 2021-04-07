<?php


namespace solid;


class OrderViewer
{
    // Рендеринг
    public function view(OrderAbstract $order)
    {
        echo 'Order with id: ' . $order->getId() . ' and title: ' . $order->getTitle() . PHP_EOL;

        if ($products = $order->getProducts()) {
            echo 'Products: ' . PHP_EOL;
            foreach ($products as $product) {
                echo 'Product with id' . $product->getId() . PHP_EOL;
            }
        }
    }
}