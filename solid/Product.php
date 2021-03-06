<?php


namespace solid;


class Product
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    public function calculateWeight(): float
    {
        // ...
        return 11.34;
    }
}