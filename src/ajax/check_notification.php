<?php
require '../router/string.php';
$check_notification = $site->bdd->query('SELECT * FROM notificate WHERE id = 1');
if($check_notification->rowCount() == 1){

    $fetch = $check_notification->fetch();

    $error      = "Une notification a été detecté.";
    $type       = 'success';
    $content    = $fetch['content'];

    die(json_encode(array('error' => $error, 'type' => $type, 'content' => $content)));
} else {
    $error  = "Aucune donné a recuperer pour le moment.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));