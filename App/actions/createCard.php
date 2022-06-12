<?php

enum CardBrand: int
{
    case Cielo = 0;
    case Mastercard = 1;
    case Visa = 2;
    case Hipercard = 3;

    public function description(): string
    {
        return match ($this) {
            CardBrand::Cielo => 'Cielo',
            CardBrand::Mastercard => 'Mastercard',
            CardBrand::Visa => 'Visa',
            CardBrand::Hipercard => 'Hipercard',
        };
    }
}

enum CardType: int
{
    case Credit = 0;
    case Debit = 1;

    public function description(): string
    {
        return match ($this) {
            CardType::Credit => 'Crédito',
            CardType::Debit => 'Débito',
        };
    }
}

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\entities\Card;
use \App\Repository\CardRepository;

if (isset($_POST['cardNumber'], $_POST['cardType'], $_POST['cardBrand'], $_POST['cardLimit'], $_POST['currentValue'], $_POST['date'])) {

    $cardRepository = new CardRepository;

    $errors = array();

    $userId = $_SESSION['user_id'];

    $cardNumber = $_POST['cardNumber'];
    $cardType = $_POST['cardType'];
    $brand = $_POST['cardBrand'];
    $cardLimit = $_POST['cardLimit'];
    $currentValue = $_POST['currentValue'];
    $date = $_POST['date'];

    $cardNumber = str_replace(" ", "", $cardNumber);

    $cardLimit = str_replace("R$", "", $cardLimit);
    $cardLimit = str_replace(".", "", $cardLimit);

    $currentValue = str_replace("R$", "", $currentValue);
    $currentValue = str_replace(".", "", $currentValue);


    $existsCard = $cardRepository->getCardByCardNumber($cardNumber);

    if (!empty($existsCard))
        header("Location: dashboard.php?cardAlReadyExists=true");

    if (empty($errors)) {
        $card = new Card;

        $card->cardNumber = $cardNumber;
        $card->type = $cardType; // 0 = Debit | 1 = Credit
        $card->brand = $brand;
        $card->limitValue = $cardLimit;
        $card->currentValue = $currentValue;
        $card->closedDate = $date;
        $card->userId = $userId;
        $card->creationDate = date('Y-m-d H:i:s');
        $card->updateDate = date('Y-m-d H:i:s');

        $cardRepository->createCard($card);

        header('Location: dashboard.php?cardCreated=true');
    }
}
