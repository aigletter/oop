<?php


namespace solid;


class OrderRepository
{
    protected $source;

    protected $builder;

    public function __construct(SourceInterface $source, BuilderAbstract $builder)
    {
        $this->source = $source;
        $this->builder = $builder;
    }

    // Работа с бд
    public function load($id): OrderAbstract
    {
        $data = $this->source->load($id);
        if ($data) {
            return $this->builder->build($data);
        }

        return null;
    }
}