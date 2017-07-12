<?php

// activer les sessions
session_start();

// remplir $_SESSION["user"] <==> "connecter mon utilisateur"
function rememberUserData($user) {
    $_SESSION["user"] = [
        "id" => $user["id"],
        "first_name" => $user["first_name"],
        "last_name" => $user["last_name"],
    ];
}


function isLoggedIn() {
    return isset($_SESSION["user"]);
}

function getUserId() {
    return $_SESSION["user"]["id"];
}

function getUserFirstname() {
    return $_SESSION["user"]["first_name"];
}

// "dé-authentifier" mon utilisateur <==> le "déconnecter" de l'application
// <==> vider les infos qui sont en session
function logUserOut() {
    //  "déconnecter" mon user mais conserver le contenu de son panier
    unset($_SESSION["user"]);

    // vide les variables de la session, garde la même session active (id de session ne change pas)
    // session_unset();

    // détruit la session (sur le serveur) plus d'id de session, le cookie est toujours dans le navigateur de l'utilisateur mais l'id ne correspond plus à aucune donnée sur le serveur
    //  vide le panier avec
    // session_destroy();
}

 ?>
