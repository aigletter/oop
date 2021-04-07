<?php


namespace solid;


interface SourceInterface
{
    public function load($id): ?array;
}