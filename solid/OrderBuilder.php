<?php


namespace solid;


class OrderBuilder extends BuilderAbstract
{
    public function build($data): OrderAbstract {
        $productData = $data['products'] ?? [];
        foreach ($productData as $item) {
            $products[] = new Product($item['id']);
        }

        return new Order($data['id'], $data['title'], $products ?? []);
    }
}