<?php


namespace Patterns\Facade;


class Facade
{
    public static function doSomething()
    {
        $one = new One();
        $three = new Three();

        $result = $one->test();
        $second = $three->second();

        return [
            '' => '',
        ];
    }
}