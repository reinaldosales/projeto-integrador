<?php

use \App\entities\User;
use \App\Repository\UserRepository;

if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm-password'])) {

    $userRepository = new UserRepository;
    
    $errors = array();
    
    $userName = $_POST['name'];
    $userMail = $_POST['email'];
    $userPassword = $_POST['password'];
    $userConfirmPassword = $_POST['confirm-password'];

    $existsUser = $userRepository->getUserByMail($userMail);
   
    if(!empty($existsUser))
        array_push($errors, "<p class='center-align red-text'> <i class='material-icons tiny'>info</i> E-mail já cadastrado. </p>");

    if(empty($errors)){
        $user = new User;
    
        $user->name = $userName;
        $user->mail = $userMail;
        $user->password = password_hash($userPassword, PASSWORD_DEFAULT);
        $user->creationDate = date('Y-m-d H:i:s');
        $user->updateDate = date('Y-m-d H:i:s');
        $user->isAdmin = false;

        $userRepository->createUser($user);
    
        header('Location: index.php?success=true');
    }
}
