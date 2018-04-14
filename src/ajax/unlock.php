<?php
include '../router/string.php';
if(!empty($_POST['form-password'])){
    $verif = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_SESSION['email']).'" AND password = "'.sha1($site->security($_POST['form-password'])).'"');
    if($verif->rowCount() == 1){
        $update = $site->bdd->query('UPDATE utilisateurs SET locked = 0 WHERE email = "'.$site->security($_SESSION['email']).'"');
        $error  = 'success';
        $page   = $_SESSION['page'];
    }else{
        $error  = 'danger';
    }
}else{
    $error  = 'danger';
}
die(json_encode(array('error' => $error, 'page' => $page)));
