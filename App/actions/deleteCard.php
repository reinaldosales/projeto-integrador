<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\CardRepository;

if (isset($_GET['toDelete']) && $_GET['toDelete'] == true) {

    $cardRepository = new CardRepository;

    $cardId = $_GET['cardId'];

    $card = $cardRepository->getCardById($cardId);

    $card[0]->DeletionDate = date('Y-m-d H:i:s');

    $cardRepository->updateCard($card[0]);

    header('Location: dashboard.php?cardDeleted=true');
}
