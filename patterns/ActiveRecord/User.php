<?php


namespace Patterns\ActiveRecord;


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



    public function save()
    {
        if (isset($this->id)) {
            return $this->update();
        } else {
            return $this->insert();
        }
    }

    public function insert()
    {
        $db = Db::getInstance();
        if ($db->exec("INSERT INTO users (name, email, password, description, age) 
            VALUES('{$this->name}', '{$this->email}', '{$this->password}', '{$this->description}', {$this->age})")) {
            $this->id = $db->getInsertedId();
            return true;
        }

        return false;
    }

    public function update()
    {
        $db = Db::getInstance();
        return $db->exec("UPDATE users SET name = '{$this->name}', email = '{$this->email}',
            password = '{$this->password}', description = '{$this->description}', age = '{$this->age}'
            WHERE id = {$this->id}");
    }

    public static function getById($id)
    {
        $db = Db::getInstance();
        if ($data = $db->query("SELECT * FROM users WHERE id = {$id}")) {
            $instance = new self($data);
            return $instance;
        }

        return null;
    }
}