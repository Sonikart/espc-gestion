<?php
require '../router/string.php';
if(!empty($_POST['maintenance_estimation']) && !empty($_POST['maintenance_reason'])){
    $update = $site->bdd->query('UPDATE maintenance SET estimation = "'.$site->security($_POST['maintenance_estimation']).'" WHERE id = 1');
    $update = $site->bdd->query('UPDATE maintenance SET reason = "'.$site->security($_POST['maintenance_reason']).'" WHERE id = 1');
    $error  = "Les informations pour la maintenance ont été modifier.";
    $type   = 'info';
} else {
    $error  = "Attention, vous devez remplir tous les champs pour appliquer une maintenance.";
    $type   = 'info';
}
die(json_encode(array('error' => $error, 'type' => $type)));
