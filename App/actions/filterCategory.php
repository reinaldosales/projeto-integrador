<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\CategoryRepository;

if (isset($_POST['btn-Filter'])) {

    $userId = $_SESSION['user_id'];
    $name = $_POST['name'] ?? null;

    $categoryList = CategoryRepository::getCategoriesByParams($userId, $name);
}
