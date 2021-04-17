<?php

use Patterns\ActiveRecord\Db;

include "../../vendor/autoload.php";

// Di
Db::setConfig([
    'dsn' => 'mysql:dbname=examples;host=127.0.0.1',
    'user' => 'root',
    'password' => '1q2w3e'
]);

// Client code
/*$user = new \Patterns\ActiveRecord\User();

$user->name = 'Test name';
$user->email = 'test@gmail.com';
$user->password = '1234';
$user->age = 33;

if ($user->save()) {
    echo 'User was created' . PHP_EOL;
}

$user->email = 'changed@gmail.com';
$user->save();*/


$user = \Patterns\ActiveRecord\User::getById(104);
$user->age = 100;
$user->save();

exit();