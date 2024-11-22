<?php

namespace app\models;

use app\core\BaseController;
use app\core\BaseModel;

class UserRoleModel extends BaseModel
{
    public int $korisnik_rolaID;
    public int $korisnikID;
    public int $rolaID;

    public function tableName()
    {
        return 'korisnik_role';
    }

    public function readColumns()
    {
        return ['korisnik_rolaID', 'korisnikID', 'rolaID'];
    }

    public function editColumns()
    {
        return ['korisnikID', 'rolaID'];
    }

    public function validationRules()
    {
        return [
            "korisnikID" => [self::RULE_REQUIRED],
            "rolaID" => [self::RULE_REQUIRED]
        ];
    }
}