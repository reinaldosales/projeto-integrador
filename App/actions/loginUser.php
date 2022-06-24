<?php

use \App\Repository\UserRepository;

if (isset($_POST['email'], $_POST['password'])) {

    $userRepository = new UserRepository;
    $errors = array();

    $userMail = $_POST['email'];
    $userPassword = $_POST['password'];

    $user = $userRepository->getUserByMail($userMail);

    if (!empty($user)) {
        if (password_verify($userPassword, $user[0]->Password)) {
            $_SESSION['logged'] = true;
            $_SESSION['user_id'] = $user[0]->UserId;
            $_SESSION['user_name'] = $user[0]->Name;
            header('Location: dashboard.php');
        } else {
            array_push($errors, "<p class='center-align red-text'> <i class='material-icons tiny'>info</i> Usuário ou senha inválidos! </p>");
        }
    } else {
        array_push($errors, "<p class='center-align red-text'> <i class='material-icons tiny'>info</i> Usuário não cadastrado. </p>");
    }
}
