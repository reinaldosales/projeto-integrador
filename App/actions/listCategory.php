<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\CategoryRepository;
use \App\entities\Card;

$CategoryRepository = new CategoryRepository;

$categories = $CategoryRepository->getCategoryByUserId($_SESSION['user_id']);
