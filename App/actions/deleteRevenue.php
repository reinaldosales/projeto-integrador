<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\CategoryRepository;

if (isset($_GET['toDelete']) && $_GET['toDelete'] == true) {

    $categoryRepository = new CategoryRepository;

    $categoryId = $_GET['categoryId'];

    $category = $categoryRepository->getCategoryById($categoryId);

    $category[0]->DeletionDate = date('Y-m-d H:i:s');

    $categoryRepository->updateCategory($category[0]);

    header('Location: dashboard.php?categoryDeleted=true');
}
