<?php


namespace solid;


class Square extends Rectangle
{
    public function setWith($width) {
        $this->with = $width;
        $this->height = $width;
    }

    public function setHeight($height) {
        $this->with = $height;
        $this->height = $height;
    }
}