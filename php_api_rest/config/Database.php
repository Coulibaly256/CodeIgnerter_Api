<?php

class Database{
    // Les propriétées de connexion à la base de donnée
    private $host = "localhost";
    private $dbname = "gestion_universite";
    private $username = "root";
    private $password = "";

    // methode Connexion à la base de données
    public function getConnexion(){
        $conn = null;

        try{
            $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8",$this->username,$this->password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (\PDOException $e) {
            echo "Erreur de connexion :" . $e->getMessage();
        }
        return $conn;
    } 
}
?>