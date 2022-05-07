<?php

namespace App;

class Connection
{
    public static function getDb()
    {
        try {
            require_once "../config.php";

            $conn = new \PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                "$user",
                "$password"
            );

            return $conn;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
