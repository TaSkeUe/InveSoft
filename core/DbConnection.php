<?php

namespace app\core;

use mysqli;

class DbConnection
{
    public function connect()
    {
        $mysqli = new mysqli("localhost", "root", "andrija0312", "invesoft");

        return $mysqli;
    }
}
#Baza