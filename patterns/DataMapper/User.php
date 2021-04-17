<?php


namespace Patterns\DataMapper;


class User
{
    public $id;

    public $email;

    public $name;

    public $description;

    public $age;

    public $password;

    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public function businessLogic()
    {
        // TODO
    }
}