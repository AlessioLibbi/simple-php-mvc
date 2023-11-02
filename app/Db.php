<?php
namespace App;
use \PDO;
use \PDOException;

class Database {

    private const HOSTNAME = 'mysql:host=localhost;dbname=restaurant_arredo';
    
    private const USER = 'root';
    private const PASS = 'root';
    
    private function getConnection() {
        try {
            $pdo = new PDO( self::HOSTNAME, self::USER, self::PASS);
        } catch (PDOException $e) {
            die("Impossibile connettersi al server");
        };
        return $pdo;


    }
   

    public function select($query) {
        $pdo = self::getConnection();
        $result = $pdo->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($query) {
        $pdo = self::getConnection();
        $pdo->exec($query);
        
    }

    public function create($query) {
        $pdo = self::getConnection();
        $pdo->exec($query);
        return $pdo->lastInsertId();
    }


}


?>
