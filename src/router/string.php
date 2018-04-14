<?php

session_start();
include 'config.php';
$site = new configuration();

if(isset($_GET['deconnexion'])){
    session_unset();
    session_destroy();
    header('Location: login');
}

if(isset($_GET['lockout'])){
    if(isset($_SESSION['connect']) && $_SESSION['connect'] == '1'){
        $update = $site->bdd->query('UPDATE utilisateurs SET locked = 1 WHERE email = "'.$site->security($_SESSION['email']).'"');
    }
}

if(isset($_GET['clear'])){
    session_unset();
    session_destroy();
}

?>
