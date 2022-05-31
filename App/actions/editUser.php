<?php

use \App\Repository\UserRepository;

$userId = $_SESSION['user_id'];
$userName = $_SESSION['user_name'];

$user = UserRepository::getUserById($userId);

// echo "<pre>"; print_r($user); echo "</pre>"; exit;

if (isset($_POST['name'])){
    $userRepository = new UserRepository;

    $user->Name = $_POST['name'];

    $success = $userRepository->updateUser($user);

    header('Location: dashboard.php?editUser=true');
}

?>