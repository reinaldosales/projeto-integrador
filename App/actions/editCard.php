<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\entities\Card;
use \App\Repository\CardRepository;

$cardRepository = new CardRepository;

$cardId = $_GET['cardId'];

$card = $cardRepository->getCardById($cardId);

$cardRepository = new CardRepository;

if (isset($_GET['toDelete']) && $_GET['toDelete'] == true) {

    $card[0]->DeletionDate = date('Y-m-d H:i:s');

    $cardRepository->updateCard($card[0]);

    header('Location: dashboard.php?cardDeleted=true');
} else {
    if (isset($_POST['cardNumber'], $_POST['cardLimit'], $_POST['currentValue'], $_POST['date'])) {

        $cardLimit = $_POST['cardLimit'];
        $closedDate = $_POST['date'];

        $card[0]->cardLimit = $cardLimit;
        $card[0]->closedDate = $closedDate;

        echo "<pre>";
        print_r($card);
        echo "</pre>";
        exit;

        $cardRepository->updateCard($card[0]);

        header('Location: dashboard.php?cardEdited=true');
    }
}
