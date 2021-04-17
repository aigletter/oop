<?php


namespace Patterns\ChainOfResponsibility;


class CheckUserRole extends HandlerAbstract
{
    public function handle(Request $request) {
        if (getUserRole() !== 'admin') {
            return '403. User is not admin';
        }

        return parent::handle($request);
    }
}