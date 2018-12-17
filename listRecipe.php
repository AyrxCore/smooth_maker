<?php

include "bdd.php";

$requete = $bdd->prepare("
     SELECT * 
     FROM recipe 
     ");

$requete->execute();
$user = $requete->fetchAll();

// <?php include "listRecipe.php";
// foreach($user as $value): ?>
<!-- <article>
   <img src=<?= $value["imgSrcRecipe"] ?> alt="img du smoothies">
   <a href="#"><h3><?= $value["recipeName"] ?></h3></a>
</article> -->
<!-- <?php endforeach; ?> -->