<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\entities\Card;
use \App\Repository\CardRepository;

$cardRepository = new CardRepository;

$cardId = $_GET['cardId'];

$card = $cardRepository->getCardById($cardId);

$cardRepository = new CardRepository;

if (isset($_POST['cardLimit'], $_POST['date'])) {

    $cardLimit = $_POST['cardLimit'];
    $closedDate = $_POST['date'];

    $cardLimit = str_replace("R$", "", $cardLimit);
    $cardLimit = str_replace(".", "", $cardLimit);


    $card[0]->CardLimit = $cardLimit;
    $card[0]->ClosedDate = $closedDate;
    $card[0]->UpdateDate = date('Y-m-d H:i:s');

    $cardRepository->updateCard($card[0]);

    header('Location: dashboard.php?cardEdited=true');
}
