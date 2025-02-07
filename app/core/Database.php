<?php 
namespace App\Core;


class Database{
    private static $pdo = null ;

    public static function getConnection(){
        if(self::$pdo === null){
            try {
                $dsn = "pgsql:host=localhost;dbname=database_mcvp;port=5432";
                self::$pdo = new \PDO($dsn, 'postgres', 'root', [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
                ]);
            } catch(\PDOException $e){
                die ($e->getMessage());
            }
        }
        return self::$pdo;
    }

}