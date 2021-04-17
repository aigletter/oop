<?php


namespace Patterns\ChainOfResponsibility;


abstract class HandlerAbstract implements HandleInterface
{
    /**
     * @var HandleInterface
     */
    protected $next;

    public function addNext(HandleInterface $handler) {
        $this->next = $handler;
    }

    public function handle(Request $request) {
        if ($this->next) {
            return $this->next->handle($request);
        }
    }
}