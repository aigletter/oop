<?php


namespace di;


class Transmission
{
    protected $something;

    public function __construct(Something $something)
    {
        $this->something = $something;
    }
}