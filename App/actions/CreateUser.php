<?php

use \App\entities\User;
use \App\Repository\UserRepository;

if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['confirm-password'])) {
    
    $errors = array();
    
    $userName = $_POST['name'];
    $userMail = $_POST['email'];
    $userPassword = $_POST['password'];
    $userConfirmPassword = $_POST['confirm-password'];

    if(strcmp($userPassword, $userConfirmPassword) != 0)
        array_push($errors, "<p class='center-align red-text'> <i class='material-icons tiny'>info</i> As senhas não correspondem. </p>");

    if(empty($errors)){
        $user = new User;
        $userRepository = new UserRepository;
    
        $user->name = $userName;
        $user->mail = $userMail;
        $user->password = password_hash($userPassword, PASSWORD_DEFAULT);
        $user->creationDate = date('Y-m-d H:i:s');
        $user->updateDate = date('Y-m-d H:i:s');
        $user->isAdmin = false;

        $userRepository->createUser($user);
    
        header('Location: index.php?userCreated=success');
    }
}
