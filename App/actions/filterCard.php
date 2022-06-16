<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\entities\Card;
use \App\Repository\CardRepository;

if (isset($_POST['btn-Filter'])) {

    $userId = $_SESSION['user_id'];

    $cardNumber = $_POST['cardNumber'] ?? null;
    $closedDate = $_POST['date'] ?? null;
    $cardLimit = $_POST['cardLimit'] ?? null;
    $cardType = $_POST['cardType'] ?? null;
    $cardBrand = $_POST['cardBrand'] ?? null;
    
    $cardNumber = str_replace(" ", "", $cardNumber);

    $cardLimit = str_replace("R$", "", $cardLimit);
    $cardLimit = str_replace(".", "", $cardLimit);


    if ($cardType != null)
        $cardType = $cardType == 'credit' ? $cardType = 0 : 1;

    $cardList = CardRepository::getCardsByParams($userId, $cardNumber, $closedDate, $cardLimit, $cardType, $cardBrand);

    // echo "<pre>";
    // print_r($cardList);
    // echo "</pre>";
    // exit;
}
