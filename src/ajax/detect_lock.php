<?php
require '../router/string.php';
if(isset($_SESSION['connect']) && $_SESSION['connect'] == '1'){
    $query = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_SESSION['email']).'"');
    $fetch = $query->fetch();
    if($fetch['locked'] == '1'){
        $error  = "Votre compte est bloqué.";
        $type   = 'success';
    }else{
        $error  = "Votre compte n'est pas bloqué.";
        $type   = 'danger';
    }
}else{
    $error  = "Vous devez être connecter.";
    $type   = 'danger';
}
die(json_encode(array('type' => $type, 'error' => $error)));
