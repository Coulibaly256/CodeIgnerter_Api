<?php
require('./config/Database.php');
require('./models/Etudiant.php');
$data = new Database();
$con = $data->getConnexion();

$etudiant = new Etudiant($con);

$data = $etudiant->readAll();

var_dump($data->fetchAll());
?>