<?php


namespace di;


class Car
{
    protected $engine;

    protected $transmission;

    protected $test;

    public function __construct(Engine $engine, Transmission $transmission)
    {
        $this->engine = $engine;
        $this->transmission = $transmission;
    }

    public function setTest(Test $test)
    {
        $this->test = $test;
    }

    public function move()
    {
        $this->engine->start();

        echo 'Car is moving' . PHP_EOL;
    }

    public function hello(Anything $anything)
    {
        $anything->sayHello();
    }
}