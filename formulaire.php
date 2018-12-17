<?php

include "bdd.php";

//var_dump($_POST);
$mail = $_POST['mail'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mdp = $_POST['mdp'];

$requete = $bdd->prepare("
INSERT INTO user SET email=?, firstName=?, lastName=?, password=?
    ");
$resultat = $requete->execute([$mail, $prenom, $nom, $mdp]);

header('Location: index.php');
exit;