<?php

namespace app\models;

use app\core\BaseModel;

class RegistrationModel extends BaseModel
{
    public int $korisnikID;
    public string $ime = '';
    public string $prezime = '';
    public string $email = '';
    public string $password = '';

    public function tableName(): string
    {
        return 'korisnici';
    }

    public function readColumns(): array
    {
        return ['korisnikID', 'ime', 'prezime', 'email', 'password'];
    }

    public function editColumns()
    {
        return ['ime', 'prezime', 'email', 'password'];
    }

    public function validationRules(): array
    {
        return [
            "email" => [self::RULE_REQUIRED, self::RULE_EMAIL, self::RULE_UNIQUE_EMAIL],
            "password" => [self::RULE_REQUIRED]
        ];
    }
}