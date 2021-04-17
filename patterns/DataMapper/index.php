<?php

use Patterns\ActiveRecord\Db;
use Patterns\DataMapper\UserMapper;

include "../../vendor/autoload.php";

Db::setConfig([
    'dsn' => 'mysql:dbname=examples;host=127.0.0.1',
    'user' => 'root',
    'password' => '1q2w3e'
]);


// Client code
$mapper = new UserMapper();

$user = $mapper->getById(104);

$user->description = 'Data mapper changed description';

$mapper->save($user);

exit();