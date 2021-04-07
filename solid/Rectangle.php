<?php


namespace solid;


class Rectangle
{
    protected $with;

    protected $height;

    public function setWith($width)
    {
        $this->with = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function calculateSquare()
    {
        return $this->with * $this->height;
    }
}