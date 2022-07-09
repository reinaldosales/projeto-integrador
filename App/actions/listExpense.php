<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\ExpenseRepository;
use \App\entities\Expense;
use App\Repository\CardRepository;

$expenseRepository = new ExpenseRepository;

$expenses = $expenseRepository->getExpensesByUserId($_SESSION['user_id']);

foreach ($expenses as $expense) {
    $card = CardRepository::getCardByIdForExpense($expense->CardId);

    $expense->cardId = substr($card[0]->Number, -4);
}
