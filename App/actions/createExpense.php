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
  $userId = $_SESSION['user_id'];
  $cardId = $_POST['cardId'];

  $card = CardRepository::getCardById($cardId);

  $value = $_POST['value'];
  $type = $_POST['type'];

  $value = str_replace("R$", "", $value);
  $value = str_replace(".", "", $value);

    if($type == 1){
      if($card[0]->LimitValue < $value){
        echo "erro";
        $errors = ["erro"];
      }else{
        $card[0]->LimitValue -= $value;
      }
    }else{
      if($card[0]->CurrentValue < $value){
       echo "erro";
       $errors = ["erro"];
      }else{
        $card[0]->CurrentValue -= $value;
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

    
    $expenseRepository->createExpense($expense);

    $cardRepository->updateBalance($card[0]);

    header('Location: dashboard.php?expenseCreated=true');
  }else{
    header('Location: dashboard.php?expenseCreated=false');
  }
}
    
