<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\CategoryRepository;
use \App\entities\Card;

$categoryRepository = new CategoryRepository;

$categoryId = $_GET['categoryId'];

$category = $categoryRepository->getCategoryById($categoryId);

if (isset($_POST['name'])) {

    $category[0]->Name = strtoupper($_POST['name']);
    $category[0]->UpdateDate = date('Y-m-d H:i:s');

    $categoryRepository->updateCategory($category[0]);

    header('Location: dashboard.php?categoryEdited=true');
}
