<?php

/* Ici, on assurera la connexion a notre bdd */

$user = "root";
$mdp = "";
$db = "formulaire";
$server = "localhost";


$link = mysqli_connect($server, $user, $mdp, $db);

if ($link) {
    //echo "connexion établie";
} else {
    die(mysqli_connect_error());
}





?>