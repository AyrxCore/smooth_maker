<?php

include "bdd.php";

$requete = $bdd->prepare("
     SELECT * 
     FROM product 
     ");

$requete->execute();
$user = $requete->fetchAll();