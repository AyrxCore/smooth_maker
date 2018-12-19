<?php

include "bdd.php";

if(isset($_POST["creation"]))
{
    $mail = $_POST['email'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];

    $requete = $bdd->prepare("
    INSERT INTO user 
    SET email=?, firstName=?, lastName=?, password=?
        ");
    $resultat = $requete->execute([$mail, $prenom, $nom, $mdp]);

    header('Location: recettes.php');
    exit;
}

$page = "newUser";
include "layout.phtml";
