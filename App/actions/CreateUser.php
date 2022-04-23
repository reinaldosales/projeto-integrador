<?php

use \App\entities\User;


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
    
        $user->name = $userName;
        $user->mail = $userMail;
        $user->password = $userPassword;
    
        header('Location: index.php?UserCreated=true');
    }
}
