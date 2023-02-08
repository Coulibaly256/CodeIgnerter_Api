<?php
class Etudiant{
    // Toutes les méthodes et propriétés nécessaires à la gestion des données de la table etudiant
    private $table = "etudiant";
    private $connexion = null;

    // les propriétés de l'objet etudiant
    public $id;
    public $nom;
    public $prenom;
    public $genre;
    public $date_naissance;
    public $date_creation;
    public $date_modification;
    public $date_suppression;

    public function __construct($db)
    {
        if ($this->connexion == null){
            $this->connexion = $db; 
        } 
    }

    // Lecture des étudiants

    public function readAll()
        {
            // On écrit la requête
            $sql = "SELECT nomEtudiant, prenomEtudiant, date_naissance, idPromotion, intitule FROM $this->table e LEFT JOIN promotion p ON idPromotion ORDER BY e.date_creation DESC";

            // On éxecute la requête
            $req = $this->connexion->query($sql);

            // On retourne le resultat
            return $req;
        }
        

}