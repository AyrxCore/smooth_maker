<?php

include "bdd.php";


$user = new UserSession;

if($user->isAuthenticated()) $idUser = $user->getUserId();

if($_POST){
    if($user->isAuthenticated()) {
        $id = $_POST["id"];
$etat = $_POST["action"];

    if($etat == "add"){

        $requete = $bdd->prepare("
            INSERT INTO favorite (idUser, idRecipe)
            VALUES ($idUser,$id)
            ");

        $result = $requete->execute();

    }else{
        $requete = $bdd->prepare("
        DELETE FROM favorite 
        WHERE idRecipe=? AND idUser=?    
        ");

        $result = $requete->execute([$id, $idUser]);
    }
    echo json_encode(["result" => $result, "id" => $id, "etat" => $etat]);
    } else {
        echo json_encode(["result" => false, "redirect" => true]);
 
    }

} else {
    if ($user->isAuthenticated()){
        $requete = $bdd->prepare("
        SELECT
        *,
        IF(
        id IN(
        SELECT idRecipe
        FROM favorite
        WHERE idUser =?
        ),
        'true',
        'false'
        ) AS InFavorite
        FROM recipe
        ");
        $requete->execute([$idUser]);
    } else {

    $requete = $bdd->prepare("
    SELECT
    *,
    'false' AS InFavorite
    FROM recipe
    ");
    $requete->execute();
    }

    $myRecipe = $requete->fetchAll();

    $page = "recettes";
    include "layout.phtml";
}