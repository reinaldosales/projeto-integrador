<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\entities\Card;
use \App\Repository\CardRepository;

$cardRepository = new CardRepository;

$cards = $cardRepository->getCardsByUserId($_SESSION['user_id']);
