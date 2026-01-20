<?php

namespace App\Core;

use PDO;

abstract class Model
{
    protected static ?PDO $db = null;

    public static function setDatabase(PDO $pdo): void
    {
        self::$db = $pdo;
    }

    protected static function getDB(): PDO
    {
        if (!self::$db) {
            throw new \RuntimeException('La connexion à la base de données n\'est pas initialisée.');
        }

        return self::$db;
    }
}


