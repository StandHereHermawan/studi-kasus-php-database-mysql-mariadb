<?php

namespace Config8 {

    use PDO;

    class Database
    {
        static function getConnection(): PDO
        {
            $host = "localhost";
            $port = 3306;
            $database = "studi_kasus_php_database_mysql_mariadb";
            $username = "TerryInParis";
            $password = "Rasis@Born";

            return new PDO("mysql:host=$host:$port; dbname=$database", $username, $password);
        }
    }
}
