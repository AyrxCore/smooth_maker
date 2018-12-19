<?php

include "bdd.php";

$requete = $bdd->prepare("
     SELECT * 
     FROM recipe 
     ");

$requete->execute();
$user = $requete->fetchAll();

$page = "recettes";
include "layout.phtml";