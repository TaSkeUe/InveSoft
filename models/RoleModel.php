<?php

namespace app\models;

use app\core\BaseController;
use app\core\BaseModel;

class RoleModel extends BaseModel
{
    public int $rolaID;
    public string $ime;

    public function tableName()
    {
        return 'role';
    }

    public function readColumns()
    {
        return ['rolaID', 'ime'];
    }

    public function editColumns()
    {
        return ['ime'];
    }

    public function validationRules()
    {
        return [
            "ime" => [self::RULE_REQUIRED]
        ];
    }
}