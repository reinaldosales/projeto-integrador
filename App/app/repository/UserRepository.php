<?php

namespace App\Repository;

use App\Connection\Database;

class UserRepository{

    public function createUser($user){
    
        $database = new Database('user');
    
        $user->id = $database->insert([
            'Name' => $user->name,
            'Mail' => $user->mail,
            'Password' => $user->password,
            'CreationDate' => $user->creationDate,
            'UpdateDate' => $user->updateDate
        ]);
    }

}

