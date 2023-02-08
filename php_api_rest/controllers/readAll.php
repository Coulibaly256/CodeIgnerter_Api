<?php

// Les entêtes requises

require_once '../config/Database.php';
require_once '../models/Etudiants.php';

if ($_SERVER['REQUEST_METHOD'] === "GET"){
    // On instancie la base de données
    $database = new Database();
    $db = $database->getConnexion();

    // On instancie l'objet etudiant
    $etudiant = new Etudiant($db);

    // Récupération des données
    $statement = $etudiant->readAll();

if($statement->rowCount() > 0){
    $data = [];

    $data[] = $statement->fetchAll();

    // On renvoie ses données sous format jsonn
    echo json_encode($data);

    }else{
        echo json_encode(["message" => "Aucune données à renvoyer"]);
    }

}else{
    echo json_encode(["message"=>"la méthode n'est pas autorisée"]);
}

?>