<?php

include "bdd.php";

$requete = $bdd->prepare("
     SELECT * 
     FROM recipe 
     ");

$requete->execute();
$recipe = $requete->fetchAll();

$page = "recettes";
include "layout.phtml";