<?php
// Ici, on va creer le code PHP qui assurera l'insertion des données 


/* INCLUDE S’il ne trouve pas le fichier, il affiche un warning , mais le script continue */
/* REQUIRE S’il ne trouve pas le fichier, il génère une erreur fatale (Fatal error) et le script s'arrête immédiatement. */


include 'connexion.php';

/* on doit verifié que toutes les valeur ont été envoyer a ce fichier */
if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["phone"]) && isset($_GET["mail"]) && isset($_GET["gender"])) 
{
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $phone = $_GET["phone"];
    $mail = $_GET["mail"];
    $sexe = $_GET["gender"];


    // Requete SQL qui permet d'insérer un utilisateur au niveau de notre bdd qui contient la table user

    // On utilise MYSQLIQUERY pour inserer des donnee dans une table qui existe

    $req = mysqli_query($link, "insert into user(nom, prenom, tel, mail, sexe) values('$nom', '$prenom', '$phone', '$mail', '$sexe')") ;

    // A present on teste si l'ajout à été effectuer avec succès ou non 

    if ($req) {
        echo "Insertion effectuer !";
    } else {
        echo "Erreur d'insertion !";
    }
}




?>