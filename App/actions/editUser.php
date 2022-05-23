<?php

use \App\Repository\UserRepository;

$userId = $_SESSION['user_id'];
$userName = $_SESSION['user_name'];

$user = UserRepository::getUserById($userId);

// echo "<pre>"; print_r($user); echo "</pre>"; exit;

if (isset($_POST['email'], $_POST['name'])){
    $userRepository = new UserRepository;

    $user->Mail = $_POST['email'];
    $user->Name = $_POST['name'];

    $userRepository->updateUser($user);
}

?>