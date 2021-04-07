<?php


namespace solid;


class VirtualProduct extends Product
{
    public function calculateWeight(): float {
        throw new \Exception('Virtual product can has weight');
    }
}