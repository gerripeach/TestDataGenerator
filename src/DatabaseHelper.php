<?php

namespace RandomData;

class DatabaseHelper
{
    private $pdo;


    public function __construct(string $host, string $port, string $user, string $pass, string $base) {
        // PDO('mysql:host=localhost;dbname=databasename', 'username', 'password');
        $this->pdo = new \PDO("mysql:host=localhost;dbname=$base;charset=utf8", $user, $pass);
    }

    public function insertCompany($company) {
        $statement = $this->pdo->prepare("INSERT INTO Company (`name`, `street`, `building_numer`, `zip_code`, `city`, `ust_id`) VALUES (?, ?, ?, ?, ?, ?)");        
        $statement->execute($company); 
    }

    public function clear() {
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $statement = $this->pdo->prepare('DELETE FROM Company');
        $statement->execute($data); 
    }
}