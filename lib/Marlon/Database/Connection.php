<?php

namespace Marlon\Database;

abstract class Connection
{
    private static $conn;

    public static function getConn()
    {
        if (!self::$conn) {
            self::$conn = new \PDO('mysql: host=localhost; dbname=curso_php', 'root', '');
        }

        return self::$conn;
    }
}
