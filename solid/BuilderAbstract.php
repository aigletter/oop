<?php


namespace solid;


abstract class BuilderAbstract
{
    abstract public function build($data): OrderAbstract;
}