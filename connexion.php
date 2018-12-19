<?php

include "bdd.php";

if($_POST)
{
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    $requete = $bdd->prepare("
        SELECT id 
        FROM user 
        WHERE email=? AND password=?
        ");

    $requete->execute([$email, $mdp]);
    $user = $requete->fetch();

    if(empty($user)){
        $result = false;
    }else{
        $result = true;
    }
    echo json_encode(["result" => $result]);
}
else{
    $page = "connexion";
    include "layout.phtml";
}

