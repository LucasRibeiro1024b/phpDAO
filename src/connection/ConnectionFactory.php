<?php 

namespace PhpDAO\connection;

class ConnectionFactory {
    public static function getConnection() {
        $connection = null;

        $dsn = "mysql:host=localhost;dbname=".DB_NAME.";charset=utf8";
        $connection = new \PDO($dsn, DB_USER, DB_PASSWD);

        return $connection;
    }
}