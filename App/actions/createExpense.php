<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\ExpenseRepository;
use \App\entities\Expense;
use App\Repository\CardRepository;

$cardRepository = new CardRepository();

$cards = CardRepository::getCardsByUserId($_SESSION['user_id']);

if (isset($_POST['cardId'], $_POST['value'],$_POST['type'])) {
  $expenseRepository = new ExpenseRepository();
  $errors = array();
  
  $cardId = $_POST['cardId'];
  $userId = $_SESSION['userId'];
  $card = CardRepository::getCardById($cardId);

  $value = $_POST['value'];
  $type = $_POST['type'];

  $value = str_replace("R$", "", $value);
  $value = str_replace(".", "", $value);

  if($type == 1){
    if($card[0]->limitValue < $value){
        $erros += new Exception("Valor não pode ser maior que o limite do cartão");
    }
  }else{
    if($card[0]->currentValue < $value){
      $erros += new Exception("Valor não pode ser maior que o saldo do cartão");
    }
  }

  if(empty($erros)){
    $expense = new Expense();

    $expense->cardId = $cardId;
    $expense->type = $type;
    $expense->value = $value;
    $expense->userId = $userId;
    $expense->creationDate = date('Y-m-d H:i:s');
    $expense->updateDate = date('Y-m-d H:i:s');

    $card[0]->limitValue -= $value;

    $cardRepository->updateBalance($card[0]);

    $expenseRepository->createExpense($expense);

  }else{

  }

}
    
