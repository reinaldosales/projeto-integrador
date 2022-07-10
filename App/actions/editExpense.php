<?php

if (!$_SESSION['logged'])
    header('Location: index.php');
  
use \App\entities\Expense;
use \App\Repository\ExpenseRepository;

$expenseRepository = new ExpenseRepository;

$expensdeId = $_GET['expenseId'];

$expense = $expenseRepository->getExpenseById($expensdeId);

if(isset($_POST['value'])){
  $value = $_POST['value'];

  $value = str_replace("R$", "", $value);
  $value = str_replace(".", "", $value);

  $expense[0]->Value = $value;
  $expense[0]->UpdateDate = date('Y-m-d H:i:s');

  $expenseRepository->updateExpense($expense[0]);

  header('Location: dashboard.php?expenseEdited=true');  

}


