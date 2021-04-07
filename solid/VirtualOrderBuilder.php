<?php


namespace solid;


use Patterns\Builder\BuilderInterface;
use Patterns\Builder\ProductInterface;

class VirtualOrderBuilder extends BuilderAbstract
{

    public function build($data): OrderAbstract {
        $productData = $data['products'] ?? [];
        foreach ($productData as $item) {
            $products[] = new Product($item['id']);
        }

        return new VirtualOrder($data['id'], $data['title'], $products ?? []);
    }
}