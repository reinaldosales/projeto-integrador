<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\CategoryRepository;
use \App\entities\Category;

if (isset($_POST['name'])) {

    $categoryRepository = new CategoryRepository;

    $errors = array();

    $userId = $_SESSION['user_id'];

    $name = $_POST['name'];

    $existsCategory = count($categoryRepository->getCategoryByNameAndUserId(strtoupper($name), $userId));

    if ($existsCategory > 0)
        array_push($errors, "Categoria já existe.");

    if (empty($errors)) {
        $category = new Category;

        $category->name = strtoupper($name);
        $category->userId = $userId;
        $category->creationDate = date('Y-m-d H:i:s');
        $category->updateDate = date('Y-m-d H:i:s');

        $categoryRepository->createCategory($category);

        header('Location: dashboard.php?categoryCreated=true');
    } else {
        header("Location: dashboard.php?categoryAlReadyExists=true");
    }
}
