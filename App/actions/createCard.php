<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\entities\Card;
use \App\Repository\CardRepository;

if (isset($_POST['cardNumber'], $_POST['cardType'], $_POST['cardLimit'], $_POST['currentValue'], $_POST['date'])) {
    $cardRepository = new CardRepository;

    $errors = array();

    $userId = $_SESSION['user_id'];
    
    $cardNumber = $_POST['cardNumber'];
    $cardType = $_POST['cardType'];
    $cardLimit = $_POST['cardLimit'];
    $currentValue = $_POST['currentValue'];
    $date = $_POST['date'];

    $cardNumber = str_replace(" ", "", $cardNumber);
    $cardLimit = str_replace("R$", "", $cardLimit);
    $currentValue = str_replace("R$", "", $currentValue);

    $existsCard = $cardRepository->getCardByCardNumber($cardNumber);

    if (!empty($existsCard))
        header("Location: dashboard.php?cardAlReadyExists=true");

    if (empty($errors)) {
        $card = new Card;

        $card->cardNumber = $cardNumber;
        $card->type = $cardType == 'debit' ? 0 : 1; // 0 = Debit | 1 = Credit
        $card->limitValue = $cardLimit;
        $card->currentValue = $currentValue;
        $card->closedDate = $date;
        $card->userId = $userId;
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
