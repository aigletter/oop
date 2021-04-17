<?php


namespace Patterns\ChainOfResponsibility;


class CheckUserLoginHandler extends HandlerAbstract
{
    public function handle(Request $request) {
        if (!isUserLogin()) {
            //throw new \Exception('User is not logged in');
            return '403. User is not logged in';
        }

        return parent::handle($request);
    }
}