<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\UserRepository;

$userId = $_SESSION['user_id'];
$userName = $_SESSION['user_name'];

$user = UserRepository::getUserById($userId);

$userRepository = new UserRepository;

if (isset($_POST['btn-DeleteUser'])) {
    $user->DeletionDate = date('Y-m-d H:i:s');

    $userRepository->updateUser($user);

    header('Location: index.php');

} else if (isset($_POST['name'])) {
    $user->Name = $_POST['name'];

    $success = $userRepository->updateUser($user);

    header('Location: dashboard.php?editUser=true');
}
