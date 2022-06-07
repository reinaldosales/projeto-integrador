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

    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
        $path = 'users/';
        $file = $_FILES['avatar'];

        $newFile = explode('.', $file['name']);
        $extension = $newFile[sizeof($newFile) - 1];

        $fileName = md5(uniqid(rand(), true)) . '.' . $extension;

        if ($extension != 'jpg' || $extension != 'png' || $extension != 'jpeg')
            header('Location: dashboard.php?avatar=false');

        move_uploaded_file($file['tmp_name'], $path.$fileName);

        $user->Avatar = $fileName;
    }

    $user->Name = $_POST['name'];

    $success = $userRepository->updateUser($user);

    header('Location: dashboard.php?editUser=true');
}
