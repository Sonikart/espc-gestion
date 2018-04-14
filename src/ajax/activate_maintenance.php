<?php
require '../router/string.php';
if($site->get_config('maintenance') == '0'){
    $check = $site->bdd->query('SELECT * FROM maintenance WHERE id = 1');
    $check = $check->fetch();
    if($check['estimation'] != '' && $check['reason'] != ''){
        $estimation = $check['estimation'];
        $reason     = $check['reason'];
        $error  = "Ont peut activer la maintenance.";
        $type   = 'success';
        $update = $site->bdd->query('UPDATE configuration SET maintenance = 1 WHERE id = 1');
        die(json_encode(array('error' => $error, 'type' => $type, 'estimation' => $estimation, 'reason' => $reason)));
    } else {
        $error  = "Des informations concernant la maintenance sont manquante.";
        $type   = 'danger';
    }
} else {
    $error  = "Le systeme est deja activer.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));
