<?php
require '../router/string.php';
if(!empty($_POST['content-message'])){
    $insert = $site->bdd->prepare('INSERT INTO p_messages (id_project, message, date_create, author) VALUES (:id_project, :message, :date_create, :author)');
    $insert->execute([
        'id_project'    => $_POST['slug_project'],
        'message'       => $_POST['content-message'],
        'date_create'   => time(),
        'author'        => $_SESSION['email'],
    ]);
    $message = $_POST['content-message'];
    $error  = "Le message a été envoyer.";
    $type   = 'success';
    die(json_encode(array('error' => $error, 'type' => $type, 'message' => $message)));
} else {
    $error  = "Votre champs message est vide.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));
