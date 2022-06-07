<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\UserRepository;

$userId = $_SESSION['user_id'];

$user = UserRepository::getUserById($userId);
