<?php
require("inc/functions.php");
// Ce fichier permet de modifier les données d'un utilisateur

// * - si l'utilisateur n'est pas authentifié, il est redirigé vers la page "login.php"
if(!isLoggedIn()) {
    header("Location: login.php");
}

// récupérer les données de l'utilisateur qu'on veut modifier:
// 1.récupérer l'ID ==> depuis un paramètre $_GET
$id = getUserId();

// faire les traitements/calculs/formattage des données
// si le formulaire a été soumis (s'il y a des données dans $_POST)
if(isset($_POST["edit-profile"])) {
    // récupérer les données saisies par l'utilisateur
    // et vérifier qu'elles sont valides
    $newUserData["first_name"] = trim(strip_tags($_POST["first_name"]));
    $newUserData["last_name"] = trim(strip_tags($_POST["last_name"]));
    $newUserData["address"] = trim(strip_tags($_POST["address"]));
    $newUserData["zipcode"] = trim(strip_tags($_POST["zipcode"]));
    $newUserData["city"] = trim(strip_tags($_POST["city"]));
    $newUserData["phone"] = trim(strip_tags($_POST["phone"]));

    updateUserData($id, $newUserData);
}

$clientData = getUser($id);

// affichage
include("templates/header.php");
include("templates/edit-profil-form.php");
include("templates/footer.php");
