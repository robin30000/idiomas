<?php

namespace App\Database;

use PDO;

class Connection
{
    public static function getPDO(): PDO
    {
        return new PDO("mysql:host=localhost;dbname=idiomas;charset=utf8", "root", "");
    }
}
