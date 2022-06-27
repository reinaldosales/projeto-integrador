<?php

namespace App\Repository;

use App\Connection\Database;
use App\Entities\Expense;
use \PDO;

class ExpenseRepository{
    public function createExpense($expense)
      {
          $database = new Database('expense');

          $expense->id = $database->insert([
              'Value' => $expense->value,
              'Type' => $expense->type,
              'CardId' => $expense->cardId,
              'CreationDate' => $expense->creationDate,
              'UpdateDate' => $expense->updateDate,
          ]);
      }

    public static function getAllCards()
    {
        return (new Database('expense'))->select('DeletionDate IS NULL')
            ->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function updateExpense($expense)
    {
        $database = new Database('expense');

        $database->update("ExpenseId = $expense->ExpenseId", [
            'Value' => $expense->Value,
            'DeletionDate' => $expense->DeletionDate,
            'UpdateDate' => $expense->UpdateDate,
        ]);
    }



    public static function getExpenseByCardId($cardId)
    {
        $database = new Database('expense');

        $where = "CardId = '$cardId'";

        return $database->select($where, null, null)
            ->fetchAll(PDO::FETCH_OBJ);
    }
}

public static function getExpensesByParams($userId, $value)
    {
        $database = new Database('expense');
            
        $name = strlen($value) ? ' AND Value = ' . $value : '';

        $where = "UserId = '$userId' $name";
        $order = '1 DESC';

        return $database->select($where, $order, null)
            ->fetchAll(PDO::FETCH_OBJ);
    }