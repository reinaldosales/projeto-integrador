<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\RevenueRepository;

if (isset($_GET['toDelete']) && $_GET['toDelete'] == true) {

    $revenueRepository = new RevenueRepository;

    $revenueId = $_GET['revenueId'];

    $revenue = $revenueRepository->getRevenueById($revenueId);

    $revenue[0]->DeletionDate = date('Y-m-d H:i:s');

    $revenueRepository->updateRevenue($revenue[0]);

    header('Location: dashboard.php?revenueDeleted=true');
}
