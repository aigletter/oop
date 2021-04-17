<?php


namespace Patterns\DataMapper;


use Patterns\ActiveRecord\Db;

class UserMapper
{
    public function save(User $user)
    {
        if (isset($user->id)) {
            return $this->update($user);
        } else {
            return $this->insert($user);
        }
    }

    public function insert(User $user)
    {
        $db = Db::getInstance();
        if ($db->exec("INSERT INTO users (name, email, password, description, age) 
            VALUES('{$user->name}', '{$user->email}', '{$user->password}', '{$user->description}', {$user->age})")) {
            $user->id = $db->getInsertedId();
            return true;
        }

        return false;
    }

    public function update(User $user)
    {
        $db = Db::getInstance();
        return $db->exec("UPDATE users SET name = '{$user->name}', email = '{$user->email}',
            password = '{$user->password}', description = '{$user->description}', age = '{$user->age}'
            WHERE id = {$user->id}");
    }

    public function getById($id)
    {
        $db = Db::getInstance();
        if ($data = $db->query("SELECT * FROM users WHERE id = {$id}")) {
            $instance = new User($data);
            return $instance;
        }

        return null;
    }
}