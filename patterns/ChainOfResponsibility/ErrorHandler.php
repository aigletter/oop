<?php


namespace Patterns\ChainOfResponsibility;


class ErrorHandler extends HandlerAbstract
{
    public function handle(Request $request) {
        try {
            return parent::handle($request);
        } catch (\Throwable $exception) {
            //
        }

    }
}