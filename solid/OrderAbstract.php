<?php


namespace solid;


abstract class OrderAbstract
{
    protected $id;

    protected $title;

    protected $products = [];

    public function __construct($id, $title, $products = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->products = array_column($products, null, 'id');
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function addProduct(Product $product)
    {
        $this->products[$product->getId()] = $product;
    }

    public function deleteProduct($id)
    {
        unset($this->products[$id]);
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }
}