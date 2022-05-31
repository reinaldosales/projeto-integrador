<?php

use \App\entities\Card;
use \App\Repository\CardRepository;

if (isset($_POST['cardNumber'], $_POST['cardType'], $_POST['cardLimit'], $_POST['currentValue'], $_POST['date'])) {
    $cardRepository = new CardRepository;

    $errors = array();

    $cardNumber = $_POST['cardNumber'];
    $cardType = $_POST['cardType'];
    $cardLimit = $_POST['cardLimit'];
    $currentValue = $_POST['currentValue'];
    $date = $_POST['date'];

    $existsCard = $cardRepository->getCardByCardNumber($cardNumber);

    if (!empty($existsCard))
        array_push($errors, "<p class='center-align red-text'> <i class='material-icons tiny'>info</i> Cartão já cadastrado. </p>");

    if (empty($errors)) {
        $card = new Card;

        $card->cardNumber = $cardNumber;
        $card->type = $cardType == 'debit' ? 0 : 1; // 0 = Debit | 1 = Credit
        $card->limitValue = $cardLimit;
        $card->currentValue = $currentValue;
        $card->closedDate = $date;
        $card->creationDate = date('Y-m-d H:i:s');
        $card->updateDate = date('Y-m-d H:i:s');

        // echo "<pre>";
        // print_r($card);
        // echo "</pre>";
        // exit;

        $cardRepository->createCard($card);

        header('Location: dashboard.php?cardCreated=true');
    }
}
