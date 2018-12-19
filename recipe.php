<?php

include "bdd.php";

$id = $_GET["id"];

$requete = $bdd->prepare("
     SELECT * 
     FROM recipe
     WHERE id= :id
     ");

$requete->execute([
    "id" => $id
]);

$recipe = $requete->fetch();

$page = "recipe";
include "layout.phtml";