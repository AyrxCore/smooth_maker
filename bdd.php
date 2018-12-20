<?php

include "UserSession.class.php";

$bdd = new PDO
(
    'mysql:host=localhost;dbname=smooth_maker;charset=UTF8',
    'root',
    'troiswa',
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
$bdd->exec("SET NAMES UTF8");