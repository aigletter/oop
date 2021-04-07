<?php


namespace di;


class Something
{
    protected $anything;

    public function __construct(Anything $anything)
    {
        $this->anything = $anything;
    }
}