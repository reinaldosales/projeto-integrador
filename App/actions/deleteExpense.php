<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

use \App\Repository\ExpenseRepository;

if (isset($_GET['toDelete']) && $_GET['toDelete'] == true) {

    $expenseRepository = new ExpenseRepository;

    $expenseId = $_GET['expenseId'];

    $expense = $expenseRepository->getExpenseById($expenseId);

    $expense[0]->DeletionDate = date('Y-m-d H:i:s');

    $expenseRepository->updateExpense($expense[0]);

    header('Location: dashboard.php?expenseDeleted=true');
}
