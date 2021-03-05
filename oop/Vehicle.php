<?php


namespace Oop;


abstract class Vehicle implements MovebleInterface
{
    protected $year;

    public function move()
    {
        echo "I am moving\n";
    }

    abstract public function start();
}