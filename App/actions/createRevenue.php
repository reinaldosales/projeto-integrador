<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\RevenueRepository;
use \App\entities\Revenue;
use App\Repository\CardRepository;

$cardRepository = new CardRepository();

$cards = CardRepository::getCardsByUserId($_SESSION['user_id']);

if (isset($_POST['cardId'], $_POST['value'])) {

    $revenueRepository = new RevenueRepository;

    $errors = array();

    $cardId = $_POST['cardId'];
    $value = $_POST['value'];
    $userId = $_SESSION['user_id'];

    $value = str_replace("R$", "", $value);
    $value = str_replace(".", "", $value);

    if (empty($errors)) {
        $revenue = new Revenue;

        $revenue->cardId = $cardId;
        $revenue->value = $value;
        $revenue->userId = $userId;
        $revenue->creationDate = date('Y-m-d H:i:s');
        $revenue->updateDate = date('Y-m-d H:i:s');

        $card = CardRepository::getCardById($cardId);

        $card[0]->CurrentValue += $value;

        $cardRepository->updateBalance($card[0]);

        $revenueRepository->createRevenue($revenue);

        header('Location: dashboard.php?revenueCreated=true');
    } else {
        header("Location: dashboard.php?revenueAlReadyExists=true");
    }
}
