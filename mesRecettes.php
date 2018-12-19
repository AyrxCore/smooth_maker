<?php

include "bdd.php";

$id = $_POST["id"];

$requete = $bdd->prepare("
        SELECT recipeName, imgSrcRecipe
        FROM recipe 
        WHERE id=?
        ");

$requete->execute([$id]);
$myRecipe = $requete->fetch();

var_dump($myRecipe);

echo json_encode(["myRecipe" => $myRecipe]);

$page = "mesRecettes";
include "layout.phtml";