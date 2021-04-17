<?php

use Patterns\ChainOfResponsibility\CheckUserLoginHandler;
use Patterns\ChainOfResponsibility\CheckUserRole;
use Patterns\ChainOfResponsibility\HandleInterface;
use Patterns\ChainOfResponsibility\Handler;
use Patterns\ChainOfResponsibility\Request;

include '../../vendor/autoload.php';

$request = new Request();
$handler = new CheckUserLoginHandler();
$checkRoleHandler = new CheckUserRole();
$checkRoleHandler->addNext(new Handler());
$handler->addNext($checkRoleHandler);

run($request, $handler);

function run(Request $request, HandleInterface $handler) {
    echo $handler->handle($request);
}




function isUserLogin()
{
    return true;
}

function getUserRole()
{
    return 'manager';
}