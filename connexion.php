<?php

include "bdd.php";

$email = $_POST["email"];
$mdp = $_POST["mdp"];

$requete = $bdd->prepare("
     SELECT id FROM user WHERE email=? AND password=?
     ");

$requete->execute([$email, $mdp]);
$user = $requete->fetch();

//var_dump($user);


if(empty($user)){
     $message = "Utilisateur inconnu";
     $result = false;
}else{
    $message = "Connexion réussie";
    $result = true;
}

echo json_encode(["result" => $result, 'message'=> $message]);