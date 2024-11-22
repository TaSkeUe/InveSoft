<?php

namespace app\models;

use app\core\BaseModel;
use app\core\DbConnection;

class UserModel extends BaseModel
{
    public int $korisnikID;
    public string $ime = '';
    public string $prezime = '';

    public string $email = '';

    public function tableName(): string
    {
        return "korisnici";
    }

    public function readColumns(): array
    {
        return ["korisnikID", "ime", "prezime", "email"];
    }

    public function editColumns(): array
    {
        return ["email", "ime", "prezime"];
    }

    public function validationRules(): array
    {
        return [
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL],
            "ime" => [self::RULE_REQUIRED],
            "prezime" => [self::RULE_REQUIRED],
        ];
    }
}