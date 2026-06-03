<?php

class Connection {
    public static function database() : PDO{
        $env = parse_ini_file('.env');

        try{
            $pdo = new PDO(
                "mysql:host=" . $env['DB_HOST'] .
                ";dbname=" . $env['DB_NAME'],
                $env['DB_USERNAME'],
                $env['DB_PASSWORD'],
                [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // fetch returns assoc array only
                ]
            ); 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e){
            die("Cant connect to db: $e");
        }
    }
}
?>