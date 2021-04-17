<?php


namespace Patterns\ChainOfResponsibility;


class Handler extends HandlerAbstract
{
    public function handle($request) {
        // Код обработчика
        return 'Handler is running' . PHP_EOL;
    }
}