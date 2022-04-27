<?php

namespace App\Repository;

use App\Connection\Database;
use \PDO;

class UserRepository
{

    public function createUser($user)
    {
        $database = new Database('user');

        $user->id = $database->insert([
            'Name' => $user->name,
            'Mail' => $user->mail,
            'Password' => $user->password,
            'CreationDate' => $user->creationDate,
            'UpdateDate' => $user->updateDate,
            'IsAdmin' => $user->isAdmin
        ]);
    }

    public static function getUserByMail($mail){
        $database = new Database('user');

        $where = "Mail LIKE '%$mail%'";

        $user = $database->select($where, null, '1')
        ->fetchAll(PDO::FETCH_OBJ);

        return $database->select($where, null, '1')
                        ->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getAllUsers(){
        return (new Database('user'))->select()
                                     ->fetchAll(PDO::FETCH_OBJ);
    }

}
