<?php

namespace app\models;

use app\core\BaseModel;

class SessionUserModel extends BaseModel
{
    public int $id;
    public int $korisnikID;
    public string $ime;
    public string $prezime;
    public string $email;
    public string $rola;

    public function getSessionData()
    {
        $query = "select korisnici.korisnikID as korisnikID, korisnici.ime, korisnici.prezime, korisnici.email, role.ime as rola from korisnik_role
        left join korisnici on korisnik_role.korisnikID = korisnici.korisnikID
        left join role on korisnik_role.rolaID = role.rolaID
        where korisnici.email = '$this->email'";

        $dbResult = $this->con->query($query);

        $resultArray = [];

        while ($result = $dbResult->fetch_assoc()) {
            $resultArray[] = $result;
        }

        return $resultArray;
    }

    public function tableName()
    {
        return '';
    }

    public function readColumns()
    {
        return [];
    }

    public function editColumns()
    {
        return [];
    }

    public function validationRules()
    {
        return [];
    }
}