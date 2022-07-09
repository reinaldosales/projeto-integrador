<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\RevenueRepository;
use \App\entities\Revenue;
use App\Repository\CardRepository;

$RevenueRepository = new RevenueRepository;

$revenues = $RevenueRepository->getRevenueByUserId($_SESSION['user_id']);

foreach ($revenues as $revenue) {
    $card = CardRepository::getCardByIdForRevenue($revenue->CardId);

    $revenue->cardId = substr($card[0]->Number, -4);
}
