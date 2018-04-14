<?php
require '../router/string.php';
// Verification que la personne est connecter
if(isset($_SESSION['connect']) && $_SESSION['connect'] == '1'){
    $query = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_SESSION['email']).'"');
    $fetch = $query->fetch();
    $check_token = $site->bdd->query('SELECT * FROM token_access WHERE token = "'.$fetch['token'].'"');
    $check_token = $check_token->fetch();
    if($check_token['active'] == 0){
        session_unset();
        session_destroy();
        $error  = "Votre compte est desactiver.";
        $type   = 'success';
    } else {
        $error  = "Votre compte n'est pas desactiver.";
        $type   = 'danger';
    }
} else {
    $error  = "No connect.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));
