<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\RevenueRepository;

if (isset($_POST['btn-Filter'])) {

    $userId = $_SESSION['user_id'];
    $value = $_POST['value'] ?? null;

    $revenueList = RevenueRepository::getRevenuesByParams($userId, $value);
}
