<?php

$host = "localhost";
$user = "lucie";
$pass = "password";
$dbname = "exo_boutique";

try {
	$db_connect = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8",$user,$pass);
}
catch(PDOException $e) {
	die('Erreur : '.$e->getMessage());
}

// Inscription
function saveClient($clientData){
    global $db_connect;

    $sql = 'INSERT INTO clients (first_name, last_name, email, password, group_id)
            VALUES (:firstName, :lastName, :email, :password, 0)';

    $query = $db_connect->prepare($sql);
    $query->bindValue(':firstName', $clientData["firstName"]);
    $query->bindValue(':lastName', $clientData["lastName"]);
    $query->bindValue(':email', $clientData["email"]);
    $query->bindValue(':password', $clientData["hash"]);
    $result = $query->execute();

    return $result;
}

// Connexion
function getUserFromEmail($email) {
	global $db_connect;

    $sql = 'SELECT * FROM clients WHERE email = :email';
	$query = $db_connect->prepare($sql);
	$query->bindValue(':email', $email);
	$query->execute();

	$result = $query->fetch(PDO::FETCH_ASSOC);
	return $result;
}


function getUser($id) {
	// récupère la connexion à la BD (qui est une variable globale)
	global $db_connect;

	// va chercher toutes les infos du client dont l'id vaut $id
    $sql = 'SELECT * FROM clients WHERE id = :id';
	// Hé, BDD, prépare moi une requête avec ce sql
	$query = $db_connect->prepare($sql);
	// Hé requête, la valeur du marqueur ":id" ce sera la valeur rangée dans la variable $id (quand tu va t'éxécuter)
	$query->bindValue(':id', $id);
	// Allez requête, t'as des valeurs pour tes marqueurs
	// éxécute toi
	$query->execute();

	// requête, donne moi ta première ligne de résultats
	// (sous forme d'un tableau associatif, index = noms des colonnes)
	$result = $query->fetch(PDO::FETCH_ASSOC);

	return $result;
}

/*** EDIT PROFIL ***/
// Permet de modifier les données de l'utilisateur
function updateUserData($id, $newUserData) {
	// se connecte à la BD
	global $db_connect;

	// définit la requête de modif d'un film
	$sql = 'UPDATE clients
	SET first_name = :first_name,
	last_name = :last_name,
	address = :address,
    zipcode = :zipcode,
    city = :city,
    phone = :phone
	WHERE id = :id';

	// modif en BD + valeurs utilisateurs = requête préparée
	$req = $db_connect->prepare($sql);
	$req->bindValue(":first_name", $newUserData["first_name"]);
	$req->bindValue(":last_name", $newUserData["last_name"]);
	$req->bindValue(":address", $newUserData["address"]);
    $req->bindValue(":zipcode", $newUserData["zipcode"]);
    $req->bindValue(":city", $newUserData["city"]);
    $req->bindValue(":phone", $newUserData["phone"]);
	$req->bindValue(":id", $id);
    $res = $req->execute();
}
