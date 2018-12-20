<?php

include "bdd.php";

$user = new UserSession;
if($user->isAuthenticated()){
$idUser = $user->getUserId();

$requete = $bdd->prepare("
        SELECT recipeName, imgSrcRecipe, idRecipe
        FROM recipe INNER JOIN favorite
        ON recipe.id = favorite.idRecipe
        WHERE idUser=?
        ");

$requete->execute([$idUser]);
$myRecipes = $requete->fetchAll();

if($myRecipes == false){
        $message = "Vous n'avez pas de recettes favorites !";
        echo json_encode(["message" => $message]);
}

$page = "mesRecettes";
include "layout.phtml";
} else {
        header("Location:connexion.php");
        exit();
}