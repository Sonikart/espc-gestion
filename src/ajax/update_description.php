<?php
require '../router/string.php';
if(!empty($_POST['update_description'])){
    $slug = $_POST['slug'];
    $update = $site->bdd->prepare('UPDATE p_project SET description = :description WHERE id_projet = "'.$slug.'"');
    $update->execute(array(
        'description'   => nl2br($_POST['update_description'])
    ));
    $content = nl2br($_POST['update_description']);
    $error  = 'La modification à été enregistrer.';
    $type   = 'success';
    die(json_encode(array('error' => $error, 'type' => $type, 'content' => $content)));
} else {
    $error  = "Votre champs description est vide.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));
