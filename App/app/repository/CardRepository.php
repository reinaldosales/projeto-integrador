<?php

namespace App\Repository;

use App\Connection\Database;
use App\Entities\Card;
use \PDO;

class CardRepository
{

    public function createCard($card)
    {
        $database = new Database('card');

        $card->id = $database->insert([
            'Number' => $card->cardNumber,
            'Type' => $card->type,
            'LimitValue' => $card->limitValue,
            'CurrentValue' => $card->currentValue,
            'ClosedDate' => $card->closedDate,
            'UserId' => $card->userId,
            'CreationDate' => $card->creationDate,
            'UpdateDate' => $card->updateDate,
        ]);
    }

    public function updateCard($card){
        // $database = new Database('card');

        // $database->update("CardId = $card->CardId", [
        //     'Name' => $user->Name,
        //     'Mail' => $user->Mail,
        // ]);
    }

    public static function getCardByCardNumber($cardNumber){
        $database = new Database('card');

        $where = "Number LIKE '%$cardNumber%'";

        return $database->select($where, null, '1')
                        ->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getCardById($cardId){
        // $database = new Database('card');

        // $where = "UserId = '$userId'";

        // $user = $database->select($where, null, '1')
        // ->fetchAll(PDO::FETCH_OBJ);

        // return $database->select($where, null, '1')
        //                 ->fetchObject(self::class);
    }

    public static function getAllCards(){
        return (new Database('card'))->select()
                                     ->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getCardsByUserId($userId){
        $database = new Database('card');

        $where = "UserId = '$userId'";

        return $database->select($where, null, null)
                        ->fetchAll(PDO::FETCH_OBJ);
    }

}
